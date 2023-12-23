<?php
class Conectar{

   protected $dbh;

   protected function Conexion(){
    try{
        $conectar = $this -> dbh = new PDO("mysql:local=localhost;dbname=api","root","");
        return $conectar;
    }catch(Exception $e){
        print "!ERROR DB: ". $e->getMessage()."<br/>";
    }
    
   }

   public function set_names(){
    return $this->dbh->query("SET NAMES 'utf8'");
   }

}

?>