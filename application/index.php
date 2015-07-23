<?php
session_start();
if (!isset($_SESSION['username'])){
    include 'login.php';
    die();
}
    ?>
<html>
    <head>
        <title>webaplication</title>
        <link rel="stylesheet" href="ressources/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="ressources/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="ressources/css/style.css">
        <script src="ressources/js/bootstrap.js"></script>
        <script src="ressources/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
        <header>
            <img src="ressources/img/airfrance.jpg">
            <h2>Welcome 
           <?php if (isset($_SESSION['username'])){
                      
                      echo $_SESSION['username']."<a href='?page=logout'>Logout</a>";
                        }
                       ?>
            </h2>
        </header>
       <dir class="clear"></dir>
       
       <div class="contents">
          <aside>
            <nav>
            <a  class="btn-danger" href="index.php" >Accueil</a>
            <a class="btn-danger" href="?page=Gestion_des_utilisateurs" >Gestion des utilisateurs</a>
            <a class="btn-danger" href="?page=Gestion_des_equipes_des_vols">Gestion des equipes des vols</a>
            <a  class="btn-danger" href="?page=Gestion_des_avions" >Gestion des avions</a>
            <a class="btn-danger" href="?page=Gestion_des_vols" >Gestion des vols</a>
            <a class="btn-danger" href="?page=Gestion_des_reservations" >Gestion des reservations</a>

            </nav>
        </aside>
        <section id="page">
            <?php
            if(@$_GET['page']){
                $url="Controlleurs/".$_GET['page'].".php";
                if(is_file($url)){
                    include $url;
                }
                else{
                    echo"Page introuvable ";
                }
                
            }
            else{
                
                include './Home.php';
            }
            
            ?>
        </section>
       </div>
       <div class="clear"></div> 
       <footer><p>All Corporight Reserved</p></footer>   
    </body>
</html>
