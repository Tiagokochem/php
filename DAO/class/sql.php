<?php

class Sql extends PDO {
    private $conn;

    public function __construct(){
        $this->conn = new PDO("mysql:hots=localhost;dbname=dbphp7", "root", "");
    }

    private function setParams($statement, $parameters = array()){

        foreach ($parameters as $key => $value){
            $this->setParam($statement, $key, $value);
        }

    }

    public function setParam($statement, $key, $value){
        $statement->bindParam($key, $value);
    }

    public function query($rowQuery, $params = array()){

        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    public function select ($rawQuery, $params = array()):array{
        $stmt = $this->query($rawQuery, $params);

        $stmt->fetchAll(PDO::FETCH_ASSOC);
    }    

}



?>