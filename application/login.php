<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="ressources/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="ressources/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="ressources/css/style.css">
        <script src="ressources/js/bootstrap.js"></script>
        <script src="ressources/js/bootstrap.min.js"></script>
    </head>
    <body>
      
       <div class="contentslogin">
             <div class="login">
                <h2>Administration  :</h2>
                <form action="login_controlleur.php" method="POST">
                <input class="input-sm" type="text" name="username" placeholder="username">
                <input class="input-sm" type="password" name="password" placeholder="Mot de passe">
                <input class="btn-primary" type="submit" name="submit" value="login">   
                </form>  
            </div>
                         
       </div>
        
    </body>
</html>
