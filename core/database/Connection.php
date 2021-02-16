<?php 

class Connection

{

    public static function make($config)

    {
        try {
            $dsn = "pgsql:host=localhost;port=5432;dbname=mytodo;user=postgres;password=postgres";
            return new PDO($config['connection'] . ";port=" . $config['port'] . 
            ';dbname=' . $config['name'] . ";user=" . $config['user'] .
            ";password=" . $config['password']); 
        } catch (PDOException $e){
            die($e->getMessage());
        }
    }
}

