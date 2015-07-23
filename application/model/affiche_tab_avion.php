<?php

class affiche_tab_avion {
  
    
    function __construct() {
        
        //connection base
        $this->conection();
         //get donnée 
         $this->getdata();
        
    }
    
    private function  conection(){
    
 include_once 'model/database.php';
$var = "include/variables.php";
$this->cnx =  new database($var);
}
 


 function getdata()
      
{
    $query="SELECT * FROM `avion`  ";
    $sql= mysql_query($query);
    if(!$sql){
        throw  new Exception("Erreur : can't execute this query");
    }
 else {
    $num= mysql_num_rows($sql);
    $num;
   for($i=0 ;$i<$num;$i++){
           $data[$i] =  mysql_fetch_array($sql);
       
          
   }
    }
    
    return $data;
}
        
        
        function close (){
    $this->cnx->close();
}
}
