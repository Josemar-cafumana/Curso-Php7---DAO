<?php

class Sql extends PDO {

    private $conn;

    public function __construct(){

        $this->conn = new PDO("mysql:dbname=nodejs;host=localhost","root","");

    }

    private function setParams($statement, $parameters = array()){
        foreach ($parameters as $key => $value) {
                
           $this->setParam($statement,$key,$value);

                }

    }

    private function setParam($statement,$key,$value){

        $statement->bindParam($key,$value);
    }

    public function query($rowquery,$params=array()){

        $smt = $this->conn->prepare($rowquery);
        
        $this->setParams($smt,$params);
        

        $smt->execute();

        return $smt;

    }

    public function select($rowquery,$params= array()):array
    {

        $stmt =   $this->query($rowquery,$params);

        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
        

    }





}


?>