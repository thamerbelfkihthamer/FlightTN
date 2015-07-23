<?php

// airopotdistination airopodepart datedepart
if ($_POST OR @$_GET['action']){
    if(isset($_POST['submit']) AND $_POST['submit']== "Rechercher"){
         $cordonner_reservation['airopotdepart'] = $_POST['airopotdepart'];
         $cordonner_reservation['airopotdistination'] = $_POST['airopotdistination'];
         $cordonner_reservation['datedepart'] = $_POST['datedepart'];
         $cordonner_reservation['passport'] = $_POST['passport'];
         $cordonner_reservation['nbplace'] = $_POST['nbplace'];
         
         try {
             include 'model/recherche_reservation.php';
             $data_reservation =  new recherche_reservation($cordonner_reservation);
            
             $tab_affich_reservation = $data_reservation->rechercher_reservation();
             
             include 'views/choix_reservation.php';
             
         } catch (Exception $ex) {
                        echo '<script type ="text/javascript"> alert("'.$ex->getMessage().'!");history.back(); </script>';

         }
    
    }
       if (isset($_GET['action'])and $_GET['action']=="reserver")
 {
        
            include 'views/reservation_cordonner.php';

}
    
 
 }
 
else{
    include 'views/reservation.php';   
}
       

        
    
  
    



