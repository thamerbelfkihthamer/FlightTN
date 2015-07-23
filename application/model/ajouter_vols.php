<?php


class ajouter_vols {
 
   private $datavol;
   // numvol airopotdepart   airopotdistination   heuredeprt   heuredistination  datedepart datedistination
   public function __construct($datavol) {
       $this->datavol =$datavol;
       $this->coonection();
       $this->ajoutervol();
       
   }
   
   public function  coonection(){
    
          include_once 'model/database.php';
          $var = "include/variables.php";
          $this->cnx =  new database($var);
}

public function ajoutervol(){
  $numvol =  $this->datavol['numvol'] ;
  $airopotdepart = $this->datavol['airopotdepart'];
  $airopotdistination = $this->datavol['airopotdistination'];
  $heuredeprt = $this->datavol['heuredeprt'];
  $heuredistination = $this->datavol['heuredistination'];
  $datedepart =  $this->datavol['datedepart'];
  $datedistination =  $this->datavol['datedistination'];
  $etat_vol= $this->datavol['etat_vol'];
  
   $query="INSERT INTO vol  VALUES ( '$numvol','$airopotdepart','$airopotdistination','$heuredeprt','$heuredistination','$datedepart','$datedistination','$etat_vol') ;";
    $sql = mysql_query($query);
    if (!$sql){
        throw  new Exception("erreur insertion de donneer");
    }
    
    else{
        return TRUE;
    }
    
}
        
function close (){
    $this->cnx->close();
}
   
    
}
