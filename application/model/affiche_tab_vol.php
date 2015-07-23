<?php

class affiche_tab_vol {

    
    public function __construct() {
        //connection bd
        $this->conection();
        //getdata
        $this->getdata();
        
    }
    
    private function  conection(){
    
 include_once 'model/database.php';
$var = "include/variables.php";
$this->cnx =  new database($var);
}

function getdata()
      
{
    $query="SELECT * FROM `vol`  ";
    $sql= mysql_query($query);
    if(!$sql){
        throw  new Exception("Erreur : can't execute this query");
    }
    
 else  {
    $num= mysql_num_rows($sql);
    $num;
   for($i=0 ;$i<$num;$i++){
           $data[$i] =  mysql_fetch_array($sql);
       
          
   }
    }
    
    if (is_array($data)){
        return $data;
    }
    
    
    
}





function close (){
    $this->cnx->close();
}
 
    
    
}
