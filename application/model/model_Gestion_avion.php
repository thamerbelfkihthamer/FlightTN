<?php


class model_Gestion_avion {
    
private $num_avion;
private $capasiter ;
private $vol_effetuer ;
private $cnx;

        function __construct($num_avion,$capasiter,$vol_effetuer) {
        
        $this->num_avion=$num_avion;
        $this->capasiter=$capasiter;
        $this->vol_effetuer=$vol_effetuer;
        
        //connection db
        $this->conection();
        //insertion de donnée
        $this->insertdata();
    }
    
private function  conection(){
    
 include_once 'model/database.php';
$var = "include/variables.php";
$this->cnx =  new database($var);
}

private function insertdata(){
    
    $requet1="INSERT INTO  avion  VALUES ('$this->num_avion','$this->capasiter','$this->vol_effetuer');";
   
   $sql=  mysql_query($requet1);
   
   if(!$sql){ 
        throw new Exception ("Erreur , Insertion echouer, verefier que le nom d'avion n'exixte pas.");
   }
    
}
function close (){
    $this->cnx->close();
}
    
    
}