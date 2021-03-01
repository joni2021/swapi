<?php

namespace App\Models;

use App\Helpers\SwApi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class Base extends Model
{
    use HasFactory;

    const  CREATED_AT = "created";

    const  UPDATED_AT = "edited";

    protected $hidden = ["id"];

    /**
     * @var string Nombre del campo a filtrar
     */
    protected $filter = "name";


    /**
     *  Chequeo de relaciones para la migración desde la SWApi
     *  Tanto las tablas
     */
    public function relations($class)
    {
        ini_set("max_execution_time", 0);


        foreach (config("swapi.endpoints") as $endpoint => $className) {

            if (array_key_exists($endpoint, $class->attributes)) {

                foreach ($class->attributes[$endpoint] as $relation) {

                    $class->doRelations($class, $endpoint, $className, $relation);

                }
            } else {

                foreach (config("swapi.alias") as $alias => $value) {

                    if (array_key_exists($alias, $class->attributes)) {

                        if (is_array($class->attributes[$alias]) && count($class->attributes[$alias]) > 1) {

                            foreach ($class->attributes[$alias] as $relation) {

                                $this->doRelations($class, $value[0], $value[1], $relation);

                            }
                        }else{
                            $this->doRelations($class, $value[0], $value[1], $class->attributes[$alias]);
                        }
                    }
                }
            }
        }
    }

    public function doRelations($class, $relationTable, $className, $urlRelation)
    {

        // Guardo el nombre de mi tabla y la tabla de relación
//        $myTable = $class->table;
        if (count(explode("\\", config("swapi.endpoints." . $class->table))) < 2)
            return false;

        $myTable = strtolower(explode("\\", config("swapi.endpoints." . $class->table))[2]);

        $externalTable = strtolower(explode("\\", $className)[2]);


        // Tomo el id de la url
        $id = explode('/', $urlRelation)[5];

        /*
         * Chequeo si hay una {propiedad}_id
         * Porque no todas tiene relación n_n
        */
        $prop = $externalTable . "_id";


        if (array_key_exists($prop, $class->attributes)) {
//            $modelo = explode("\\", config("swapi.endpoints." . $class->table))[2];

            $swApi = new SwApi();
            $relationEntityResult = $swApi->get($relationTable, $id);

            $f = json_decode(json_encode($relationEntityResult), true);

            $relationEntity = new $className();

            $relation = $relationEntity->find($id);

            if($relation){
                $relationEntity = $relation;
            }else{

                $relationEntity->id = $id;


                foreach ($f as $attr => $val) {
                    if (in_array($attr, $relationEntity->fillable))
                        $relationEntity->{$attr} = $val;
                }

                $relationEntity->save();
            }

            $modelo = config("swapi.endpoints." . $class->table);
            $modelo = new $modelo;

            $modelo = $modelo->find($class->id);

            $modelo->$prop = $id;
            $modelo->save();
        } else {


            // Sino creo el objeto relacional y chequeo si ya está creado
            $entity = new $className;
            $result = $entity->find($id);


            /*
             * Si no hay resultados, con el id voy a buscar los datos a la api para darlo de alta
             */
            if (!$result) {

                $this->doRelationsNN($relationTable, $myTable, $externalTable, $id, $className);
            }else{
                // Si existe la relación en el modelo, inserto en la tabla intermedia
                if(method_exists($class,$externalTable) && $class->$externalTable() instanceof BelongsToMany)
                    if($class->$externalTable()->where($prop,"=",$result->id)->count() == 0)
                        $class->$externalTable()->attach($result->id);
            }
        }
    }

    public function doRelationsNN(string $relationTable, string $myTable, string $externalTable, int $id, string $className)
    {

        $swApi = new SwApi();
        $relationEntityResult = $swApi->get($relationTable, $id);

        $f = json_decode(json_encode($relationEntityResult), true);

        $relationEntity = new $className();
        $relationEntity->id = $id;


        foreach ($f as $attr => $val) {
            if (in_array($attr, $relationEntity->fillable))
                $relationEntity->{$attr} = $val;
        }

        $relationEntity->save();

        foreach ($f as $attr => $val) {
            if (!in_array($attr, $relationEntity->fillable))
                $relationEntity->{$attr} = $val;
        }


        /*
         * Genero el nombre de la tabla intermedia bajo los estándares de laravel
         */
        $modelsName = [$myTable, $externalTable];
        sort($modelsName);

        $tablePivotName = implode("_", $modelsName);

        // Chequeo que exista la tabla intermedia
        if (DB::selectOne(DB::raw("SELECT COUNT(*) AS count FROM information_schema.tables  WHERE table_schema = '" . config("database.connections." . config("database.default") . ".database") . "' AND table_name = '$tablePivotName'"))->count > 0) {


            /*
             * Se hace el insert en la tabla intermedia
             */
            DB::table($tablePivotName)->insert([
                $myTable . "_id" => $this->id,
                $externalTable . "_id" => $relationEntity->id
            ]);

        }

        // Hago las relaciones de esta relación
//        $this->relations($relationEntity);
    }


    /**
     * Devuelve la propiedad url de la entidad
     *
     * @return string
     */
    public function getUrlAttribute()
    {
        $endpoint = array_search(static::class, config("swapi.endpoints"));

        return URL::asset(config("swapi.urls.$endpoint") . $this->id);
    }


    /**
     * Filtro de búsqueda
     */

    public function scopeFilter($query, $search)
    {
        if(is_array($this->filter)){
            foreach($this->filter as $filter){
                $query = $query->orWhere($filter,"like","%$search%");
            }

            return $query;
        }

        return $query->where($this->filter, 'like', "%$search%");
    }

}
