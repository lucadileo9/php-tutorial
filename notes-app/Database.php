<?php

class Database {

    public $connection;

    public function __construct($config, $user, $password)
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');
   

        //  dd( $dsn);
       
        // Vecchia versione hardcodata
        //  $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";
        //  dd( $dsn);

        $this->connection = new PDO($dsn, $user, $password);
    }
    
    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }
}
