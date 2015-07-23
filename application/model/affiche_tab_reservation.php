<?php


class affiche_tab_reservation {
   
    
      
    function __construct() {
        
        //connection base
        $this->conection();
         //get donnée 
       //  $this->getdata();
        
    }
    
    private function  conection(){
    
 include_once 'model/database.php';
$var = "include/variables.php";
$this->cnx =  new database($var);
}
 


 function getdata()
      
{
    $query="SELECT * FROM `reservation`  ";
    $sql= mysql_query($query);
    if(!$sql){
        throw  new Exception("Erreur : can't execute this query");
    }
 else {
    $num= mysql_num_rows($sql);
  
   for($i=0 ;$i<$num;$i++){
           $datareservation[$i] =  mysql_fetch_array($sql);
       
          
   }
    }
    
    return $datareservation;
}
        
        
        function close (){
    $this->cnx->close();
}
}
