<?php

class Model{
    protected static $tableName = '';
    protected static $columns = [];
    protected $values = [];

    function __construct($arr){
        $this -> loadFromArr($arr);
    } 

    public function loadFromArr($arr){
        if ($arr){
            foreach($arr as $key => $value){
                $this ->$key= $value;
            }
        }
    }

    public function __get($key){
        return $this -> values[$key]; 
    }

    public function __set($key, $value){
        $this -> values[$key] = $value;
    }

    public function getSelect(){
        $sql = 'SELECT * FROM ' . static::$tableName;
        return $sql;
    }
}