<?php


class recherche_reservation {
  public $data_reservation;
  public   function  __construct($data_reservation) {
        $this->data_reservation = $data_reservation ;
        $this->coonection();
       // $this->rechercher_reservation();
        
    }
    
  private function  coonection(){
    
 include 'model/databases.php';
$var = "includes/variables.php";
$this->cnx =  new databases($var);
}
// airopotdistination airopodepart datedepart

function  rechercher_reservation(){
    $airopodepart = $this->data_reservation['airopotdepart'];
    $airopotdistination = $this->data_reservation['airopotdistination'];
    $datedepart= $this->data_reservation['datedepart'];
    $numpassport = $this->data_reservation['passport'];
    $numplace =  $this->data_reservation['nbplace'];
    $query1= "INSERT INTO reservation VALUES('','$airopodepart','$airopotdistination','$numplace','$datedepart',$numpassport); ";
    //AND (datedepart = '$datedepart')   AND (airopotditination ='$airopotdistination')
    $query ="SELECT * FROM vol WHERE (airopotdepart = '$airopodepart') ";
    //echo $query;
    $sql1= mysql_query($query1);
    $sql = mysql_query($query);
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
