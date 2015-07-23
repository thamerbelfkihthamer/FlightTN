<?php


class display_data_utilisateur {
   
    
    
 public function __construct() {
        $this->coonection();
        }
    
     public function  coonection(){
    
          include_once 'model/database.php';
          $var = "include/variables.php";
          $this->cnx =  new database($var);
} 

 function display($id){
   
    $query ="SELECT * FROM utilisateur WHERE id = '$id'";
    $sql =  mysql_query($query);
    if (!$sql){
        throw  new Exception("Erreur : cannot execute the query !");
    }
    else{
        $num = mysql_num_rows($sql);
        while($num){
            
           $data =  mysql_fetch_array($sql) ;
           $num --;
        }
        
    }
    return $data;
    
}
        
function close (){
    $this->cnx->close();
}
    
    
}

