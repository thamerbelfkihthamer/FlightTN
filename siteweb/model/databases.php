<?php


class databases {
   private  $host;
  private  $user;
  private   $password;
  private   $database;
  
  function __construct($filename) { //filename = variables.php
      
      if (is_file($filename)) {
            include $filename;
        } else {
            throw new Exception("Erreur");
        }

        $this->host = $host;
      $this->user = $user;
      $this->password = $pass;
      $this->database = $database;
      $this->connect();

  }
  function connect(){
      //connect to the server 
      if (!mysql_connect($this->host, $this->user, $this->password)) {
            throw new Exception("Error : not connected to the server. ");
        }

 
        //selected databse
        if (!mysql_select_db($this->database)) {
            throw new Exception("Error :not database selected. ");
        }
           
    }
  
  function close(){
      mysql_close();
  }
  
}
?>

