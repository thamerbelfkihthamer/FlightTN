<?php


class login_user {
  
    private $username;
    private $password;
    private $cnx;
    
    function __construct($username,$password) {
     //set data
     $this->setdata($username, $password);
     //connect DB
     $this->coonection();  
      //get data
      $this->getdata();
}
private function  setdata($username,$password){
    $this->username=$username;
    $this->password=$password;
    
    
}

private function  coonection(){
    
 include_once '/model/databases.php';
$var = "include/variables.php";
$this->cnx =  new databases($var);
}

private function  getdata (){
  $request ="SELECT * FROM utilisateur WHERE pseudo = '$this->username' AND password = '$this->password' " ;
    $sqll =  mysql_query($request);
    $num_rows = \mysql_num_rows($sqll);
    if ($num_rows > 0){
        return true;
    }
    else {
        
        throw new Exception("username or passwrod is invalid , Please try again");
    }
}

function close (){
    $this->cnx->close();
}
}

?>
