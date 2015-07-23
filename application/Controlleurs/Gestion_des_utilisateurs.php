<h4 class="titre">Gestion des utilisateurs :</h4>

<?php
if ($_POST OR @$_GET['action'])
    {     
                  if (isset($_GET['action'])and $_GET['action']== "ajouter"){
                       try {
                              $id =$_GET['id'];
                              include 'model/display_data_utilisateur.php';
                             $ajoututilisateur = new display_data_utilisateur();
                          $datarowedit =  $ajoututilisateur->display($id);
                            include 'views/views_ajouter_utilisateur.php';
                           } catch (Exception $ex) {
                        echo '<script type ="text/javascript"> alert("'. $ex->getMessage().'");history.back(); </script>';

                       }
                       
                    
                       
                       
                   }
                    if(isset($_POST['submit']) AND $_POST['submit']== "ajouter"){
                       $dataedit['id'] = $_POST['id'];
                       $dataedit['nom'] = $_POST['nom'];
                       $dataedit['prenom'] = $_POST['prenom'];
                        $dataedit['email'] = $_POST['email'];
                          $dataedit['pseudo'] = $_POST['pseudo'];
                    $dataedit['pass'] = $_POST['motdepass'];
                       try {
                            include_once 'model/edit_utilisateur.php';
                             $tabdata ="utilisateur";
                             $editdata = new edit_utilisateur($dataedit, $tabdata,$_POST['pseudo'],$_POST['motdepass'] );
                           $update=   $editdata->edite($id);
                       if ($update){
                            echo '<script type ="text/javascript"> alert("modification est reuusite "); </script>';
 
                       }
     
                       } catch (Exception $ex) {
                           echo $ex->getMessage();
                       }
                   }
                   
                   

    
    
    }




else
      {
 
            include 'model/affiche_tab_utilisateur.php';
            $data = new affiche_tab_utilisateur();
            $tab_affich =$data->getdata();
            include 'views/view_tab_utilisateur.php ';
            
                  
      } 
?>

