<?php


class register {
    
    private $nom;
   private  $prenom;
    private $username;
    private $email;
    private $password;
    private $cnx;
    function __construct($nom,$prenom,$username,$email,$password) {
       //set data 
       $this->setdata($nom, $prenom, $username, $email, $password);
       // Connection DB
       $this->coonection();
       //insert user data
       $this->insertdata();
    }
    
    function setdata($nom,$prenom,$username,$email,$password){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->username=$username;
        $this->email=$email;
        $this->password=$password;
        
    }
    private function  coonection(){
    
          include 'model/database.php';
          $var = "include/variables.php";
          $this->cnx =  new database($var);
}

function insertdata(){
    
    $request="INSERT INTO `admin` (`id`, `nom`, `prenom`, `user`, `email`, `password`) VALUES ('', '$this->nom', '$this->prenom', '$this->username', '$this->email', ' $this->password');";
    $sql = mysql_query($request);
    if($sql) echo"Inscription terminer";
    else throw new Exception ("Erreur , Inscription echouer .");
    
}
    
 function close (){
    $this->cnx->close();
}
 
    
}
