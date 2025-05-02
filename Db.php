<?php 

class Database{
public $conn;

  public function __construct($config,$username='toto',$pwd='')
  {


$dsn="mysql:".http_build_query( $config,'',';');
    


    $this->conn=new PDO($dsn,$username,$pwd,[
      PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
    ]);
    
  }

  public function query($query){
    
    
    $stmt=$this->conn->prepare($query);
    $stmt->execute();
    
   return $stmt;
  }
}