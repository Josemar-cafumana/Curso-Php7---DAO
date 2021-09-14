<?php

class Usuario{

private $id;
private $nome;
private $email;
private $description;


public function getId(){

    return $this->id;
}
public function getNome(){

    return $this->nome;
}
public function getEmail(){

    return $this->email;
}
public function getDesc(){

    return $this->description;
}


public function setId($value){

    $this->id = $value;
}
public function setNome($value){

    $this->nome = $value;
}
public function setEmail($value){

    $this->email = $value;
}
public function setDesc($value){

    $this->description = $value;
}

public static function getAllData(){

    $sql = new Sql();
   return $data = $sql->select("SELECT * FROM users");

    
}

public static function Search($nome){

    $sql = new Sql();
   return $data = $sql->select("SELECT * FROM users WHERE nome like :search ",array(
       ":search"=>"%".$nome."%"
   ));

    
}

public function Login($nome,$email){

    $sql = new Sql();

   $results = $sql->select("SELECT * FROM users WHERE nome= :nome and email=:email",array(":nome" => $nome,":email"=>$email));

   
   if(count($results) > 0){

       $row = $results[0];

       $this->setId($row["id"]);
       $this->setNome($row["nome"]);
       $this->setEmail($row["email"]);
       $this->setDesc($row["description"]);
   }else{

        throw new Exception("ESSA CONTA NÃO EXISTE",1);

   }

}

public function loadById($id){

    $sql = new Sql();

   $results = $sql->select("SELECT * FROM users WHERE id= :ID",array(":ID" => $id));

   
   if(count($results) > 0){

       $row = $results[0];

       $this->setId($row["id"]);
       $this->setNome($row["nome"]);
       $this->setEmail($row["email"]);
       $this->setDesc($row["description"]);
   }

}

public function __toString(){

    return json_encode(array(
        "id"=>$this->getId(),
        "Nome"=>$this->getNome(),
        "E-mail"=>$this->getEmail(),
        "Descrição"=>$this->getDesc()
    ));
}




}

?>