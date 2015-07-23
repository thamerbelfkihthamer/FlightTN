<h4 class="titre">Gestion de reservation :</h4>

<?php

$test =FALSE;
        if($test == TRUE){
            
        }
        else
        {
             include 'model/affiche_tab_reservation.php';
            $dataa= new affiche_tab_reservation();
            $tab_affich =$dataa->getdata();
       
                 include 'views/tab_reservation.php';
        }
            
            
