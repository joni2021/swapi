<?php


namespace App\Helpers;


use Symfony\Component\Routing\Exception\RouteNotFoundException;

class SwApi
{
    protected $curl;
    protected $header;
    protected $httpResultado;
    protected $httpCode;
    protected $urlBase;

    /**
     * SwApi constructor.
     */
    public function __construct()
    {
        $this->urlBase  = config('swapi.URL_BASE');
        $this->header   = [
            'Content-Type: application/json'
        ];
    }

    /**
     * Llamado a una URL, con parámetros opcionales
     *
     * @param string $url
     * @param string $method
     * @param array $body
     */
    public function call($url = '', $method = 'GET', Array $body = [])
    {
//        dd($this->urlBase . $url);
        # Abro conexión
        $this->_init($this->urlBase . $url);

        # Método
        curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, $method);

        # Si tiene parámetros en el body
        if (count($body) > 0)
            curl_setopt($this->curl, CURLOPT_POSTFIELDS, json_encode($body));

        # Ejecuto


        $this->httpResultado = $this->_exec();
        $this->httpCode = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);

        # Cierro
        $this->_close();
    }

    /**
     * Devuelve el código HTTP de la respuesta
     *
     * @return int
     */
    public function getHttpCode() :int
    {
        return $this->httpCode;
    }

    /**
     * Obtiene el resultado de la consulta HTTP
     *
     * @return mixed
     */
    public function getResultado()
    {
        return json_decode($this->httpResultado);
    }


    /**
     * Cierre de la conexión de cURL
     */
    protected function _close()
    {
        curl_close($this->curl);
    }

    /**
     * Ejecuta la petición HTTP
     *
     * @return string|bool
     */
    protected function _exec()
    {
        return curl_exec($this->curl);
    }

    /**
     * Inicialia cURL
     *
     * @param string $url
     */
    protected function _init(String $url)
    {
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, $url);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $this->header);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false);
    }

    /**
     * Listado de registros de la SWapi
     *
     * @param $type string Nombre de la entidad a consultar
     * @return array
     */
    public function getAll(string $type) :array
    {
        if(!array_key_exists($type,config("swapi.endpoints"))){
            throw new RouteNotFoundException("The route \"$type\" to SWApi is not found");
        }

        $this->call("$type/");

        $result = $this->getResultado();

        return $result->results;
    }

    /**
     * Detalle de un registro
     *
     * @param $type string Nombre de la entidad a consultar
     * @param $id int Id del registro a traer
     * @return object
     */
    public function get(string $type,int $id) :object
    {

        $this->call("$type/$id/");

        return $this->getResultado();
    }


}
