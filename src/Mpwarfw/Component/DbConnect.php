<?php

namespace Mpwarfw\Component;


class DbConnect extends GenericDbConnect{

    protected $connection;

    public function __construct(){

        $this->connection = new \PDO('mysql:host=localhost;dbname=mpwar_fwk', 'root', '12345');

    }

    //abstract public function insert();

    //abstract public function search($value);

    public function getAll($table){
        try{
            $query 		= "select * from ".$table;
            $statement 	= self::prepare($query);
            $statement->execute();
        }catch (\PDOException $exception){
            echo "Error en Selecctionar: " . $exception->getMessage();
        }
        $row= $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $row;
    }

    public function insert($parameters)
    {
        try{
            $query 		= "INSERT INTO users SET id = ?, name = ?, lastName = ?";
            $statement 	= self::prepare($query);
            $statement->bindParam(1,  $parameters['dni']);
            $statement->bindParam(2,  $parameters['nombre']);
            $statement->bindParam(3,  $parameters['apellido']);
            $statement->execute();
        }catch (\PDOException $exception){
            echo "Error en insertar: " . $exception->getMessage();
        }
        return true;

    }

}