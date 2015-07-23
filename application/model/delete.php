<?php

class delete  {

    public function __construct() {
      
        $this->coonection();
    
        }
    public function  coonection(){
    
          include_once 'model/database.php';
          $var = "include/variables.php";
          $this->cnx =  new database($var);
} 

  function deleterecordbyid($id){
        
        $query = "DELETE FROM avion WHERE id = '$id' ";
        $sql= mysql_query($query);
        if (! $sql){
            throw new Exception("ERREUR DELETE record");
        }
        else {
            return TRUE;
            }
        
    }
    
    function close (){
    $this->cnx->close();
}
   
}
?>