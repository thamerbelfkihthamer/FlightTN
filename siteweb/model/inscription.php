<?php


class inscription {
    
    private $nom;
   private  $prenom;
    private $email;
    private $cnx;
    function __construct($nom,$prenom,$email) {
       //set data 
       $this->setdata($nom, $prenom, $email);
       // Connection DB
       $this->coonection();
       //insert user data
       $this->insertdata();
    }
    
    function setdata($nom,$prenom,$email){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
       
        
    }
    private function  coonection(){
    
          include 'model/databases.php';
          $var = "includes/variables.php";
          $this->cnx =  new databases($var);
}

function insertdata(){
    
    $request="INSERT INTO utilisateur  VALUES ('','$this->nom','$this->prenom','$this->email','','') ; ";
   
    $sql = mysql_query($request);
    if($sql){
        
        echo"Inscription terminer";
    }
    else throw new Exception ("Erreur , Inscription echouer .");
    
}
    
 function close (){
    $this->cnx->close();
}
 
    
}


