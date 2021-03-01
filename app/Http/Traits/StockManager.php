<?php


namespace App\Http\Traits;


trait StockManager
{
    protected $count = "count";

    /**
     * Devuelve la cantidad de elementos en stock
     *
     * @return int
     *
     */
    public function getCount():int
    {
        return intval($this->attributes[$this->count]);
    }

    /**
     * Setea la cantidad de elementos en stock
     *
     * @param int $count
     */
    public function setCount(int $count){
        $this->attributes[$this->count] = $count;
        $this->save();
    }

    /**
     * Incrementa la cantidad de elementos en stock
     *
     * @param int $count
     */
    public function addCount(int $count){
        $this->attributes[$this->count] += $count;
        $this->save();
    }

    /**
     * Decrementar la cantidad de elementos en stock
     *
     * @param int $count
     */
    public function subCount(int $count){
        $this->attributes[$this->count] -= $count;
        $this->save();
    }



}
