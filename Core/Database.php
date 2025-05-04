<?php 
namespace Core;
use PDO;
class Database{
  public $conn;
  public $stmt;

  public function __construct($config,$username='toto',$pwd='')
  {


$dsn="mysql:".http_build_query( $config,'',';');
    


    $this->conn=new PDO($dsn,$username,$pwd,[
      PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
    ]);
    
  }

  public function query($query,$params=[]){
    
    
    $this->stmt=$this->conn->prepare($query);
    $this->stmt->execute($params);
    
   return $this;
  }

  public function find(){
    return $this->stmt->fetch();
        
      } 
      
public function findOrFail(){
$resultat=$this->find();    
if(!$resultat){abort();}

return $resultat;
} 

public function get(){
    return $this->stmt->fetchAll();

    
  }
}