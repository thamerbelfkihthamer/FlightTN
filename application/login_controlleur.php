<?php

if ($_POST){
    
    // Connextion
    if(isset($_POST['submit']) AND $_POST['submit']== "login"){
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      try {
          include 'model/login.php';
         $login =  new login($username,$password);
         if ($login== true){
             session_start();
            $_SESSION['username']= $username;
           // echo '<meta http-equiv= "refresh" content = "2" url="pagedestinataire" />'; 
           header('Location:index.php');
             
         }
          
      } catch (Exception $ex) {
          //echo $ex->getMessage();
       echo '<script type ="text/javascript"> alert("'.$ex->getMessage().'"); history.back(); </script>';
          // echo '<script type ="text/javascript"> alert("Inscription echouer !");history.back(); </script>';


      }
    }
    /* Inscription 
        if(isset($_POST['submit']) AND $_POST['submit']== "Inscription"){
           
            $nom =$_POST['nom'];
            $prenom = $_POST['prenom'];
            $username = $_POST['user'];
            $email =$_POST['email'];
            $password =$_POST['pass'];
            
            try {
                          include './model/register.php';
                         new register($nom, $prenom, $username, $email, $password);
                         echo '<script type ="text/javascript"> alert("Inscription terminer !");history.back(); </script>';
                    
                         

                
            } catch (Exception $ex) {
           echo '<script type ="text/javascript"> alert("Inscription echouer !");history.back(); </script>';

        //  echo $ex->getMessage();

            }
        }
*/
   
}

?>