<?php

//session_start();
//if(!isset($_SESSION['pseudo'])){
  //  include 'index.php';
//}
//session_destroy();

//header
include 'header.php';
//contenu
echo '<div id ="contenu">';

//body
echo '<div id="controlleur">';

if(@$_GET['page']){
                $url="controlleurs/".$_GET['page'].".php";
                if(is_file($url)){
                    include $url;
                }
                else{
                    echo"Page introuvable ";
                }
                
            }
            else{
                
                include './body.php';
            }


//include 'body.php';
echo '</div>';
// slider  
echo '<div id="slider">';

//login
echo '<div id="login">';
include 'views/slider_login.php';
if(isset($_POST ['submit']) AND $_POST['submit'] =="Connecter"){
        $login= $_POST['login'];
        $pass = $_POST['pass'];
        try{
            include_once 'model/login_user.php';
            $entrer =new login_user($login,$pass);
            if($entrer == TRUE){
               // session_start() ;
               // $_SESSION['login'] =$login;
               header('Location:index.php');
     echo '<script type ="text/javascript"> alert("Bienvenue !");history.back(); </script>';

               
            }
            
        } catch (Exception $ex) {

        }
                
        
    }

echo '</div>';

//inscription 
echo '<div id="inscription">';
//inscription utilisauter
include 'views/slider_inscription.php';

if (isset($_POST['submit']) AND $_POST['submit'] == "inscription" ){
   $nominscri =$_POST['nom'];
   $prenominscri =$_POST['prenom'];
   $emailinscri = $_POST['email'];
   echo $nominscri;
   
   try {
       include 'model/inscription.php';
       $insert = new inscription($nominscri,$prenominscri,$emailinscri);
        if ($insert){
      echo '<script type ="text/javascript"> alert("Insertion de vol terminer !");history.back(); </script>';
     }
   
   } catch (Exception $ex) {
      echo $ex->getMessage();

   }
   
    
}

echo '</div>';
echo '</div>';



echo '</div>';

 //footer
  include 'footer.php';
       
       ?>
        
       
         
       
   
        
        
 


