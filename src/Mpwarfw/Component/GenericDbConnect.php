<?php

namespace Mpwarfw\Component;


abstract class GenericDbConnect {

    protected $connection;

    public function __construct(){

        $this->connection = new \PDO('mysql:host=localhost;dbname=mpwar_fwk', 'root', '12345');

    }

    public function prepare($query){
        return $this->connection->prepare($query);
    }

    //abstract public function insert();

    //abstract public function search($value);

    abstract public function getAll($table);

}