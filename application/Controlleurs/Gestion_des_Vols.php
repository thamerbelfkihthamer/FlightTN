<h4 class="titre">Gestion vols : </h4>
<br>
<h4 class="titree"><a href="?page=Gestion_des_vols&action=add" >Ajouter nouvelle vol</a></h4>
<?php
if ($_POST OR @$_GET['action'])
    
   
    {              
     // ajouter vol
    if (isset($_GET['action'])and $_GET['action']== "add"){
                          include 'views/ajouter_vols.php';
                                  if(isset($_POST['submit']) AND $_POST['submit']== "Ajouter"){
                                       $cordonner_vol['numvol'] =$_POST['numvol'];
                                       $cordonner_vol['numavion'] =$_POST['numavion'];
                                       $cordonner_vol['airopotdepart'] = $_POST['airopotdepart'];
                                       $cordonner_vol['airopotdistination'] =$_POST['airopotdistination'];
                                       $cordonner_vol['heuredeprt'] =$_POST['heuredeprt'];
                                       $cordonner_vol['heuredistination'] =$_POST['heuredistination'];
                                       $cordonner_vol['datedepart'] =$_POST['datedepart'] ;
                                       $cordonner_vol['datedistination'] =$_POST['datedistination'];
                                       $cordonner_vol['etat_vol'] =$_POST['etat_vol'];
                                      try
                                        {
                                              include 'model/ajouter_vols.php';
                                               $inser =   new ajouter_vols( $cordonner_vol);
                                          if ($inser){
                                                 echo '<script type ="text/javascript"> alert("Insertion de vol terminer !");history.back(); </script>';
                                                     }
                                            }
                                       catch (Exception $ex) {
                                             echo $ex->getMessage();
                                                  }     
            }}
            //suuprimer une vol
            if (isset($_GET['action'])and $_GET['action']=="delete"){
                try {
                    include 'model/delete_vol.php';
                    $id =$_GET['id'];
                    $del_vol = new delete_vol();
                     $del_vol->deleterecordbyid($id);
                 echo '<script type ="text/javascript"> alert("Supression de vol terminer !");history.back(); </script>';

                } catch (Exception $ex) {
                echo '<script type ="text/javascript"> alert("'.$ex->getMessage().'!");history.back(); </script>';

                }
            }
            
          
    
    
    //edit etat de  vol  
    if (isset($_GET['action'])and $_GET['action']== "edit"){
        
        try{
            include_once 'model/display_vol.php';
            $id =$_GET['id'];
            $editdata = new display_vol();
             $datarowedit =   $editdata->display($id);
           include 'views/edit_vol.php';
            
        } catch (Exception $ex) {
                        echo '<script type ="text/javascript"> alert("'. $ex->getMessage().'");history.back(); </script>';

        }
    }
    
   
         if(isset($_POST['submit']) AND $_POST['submit']== "editvol"){
                      $etat_vol = $_POST['etat_vol'];
                       try {
                          // $id =$_POST['id'];
                           
                           include_once 'model/edit_vol.php';
                             $tabdata ="vol";
                             $editdata = new edit_vol($tabdata ,$_POST['etat_vol']);
                           $update=   $editdata->edite($id);
                       if ($update){
                            echo '<script type ="text/javascript"> alert("modification est reuusite "); </script>';
 
                       }
     
                       } catch (Exception $ex) {
                           echo $ex->getMessage();
                       }
                   }

    }
    
                       
   
   
    
           
// affichier le tableau de vols existent 

else{
    include 'model/affiche_tab_vol.php';
            $data = new affiche_tab_vol();
            $tab_affich =$data->getdata();
           // if (is_array($data)){
                 include 'views/tab_vol.php';
           // }
           // else {
         //  echo '<script type ="text/javascript"> alert("Inserer une  vol stp !");history.back(); </script>';

           // }
  
  
}

?>

