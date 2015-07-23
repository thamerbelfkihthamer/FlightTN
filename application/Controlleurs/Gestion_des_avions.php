<h4 class="titre">Gestions des avions : </h4>

<h4 class="titree"><a href="?page=Gestion_des_avions&action=add" >Ajouter nouvelle avion</a></h4>
<?php 
// ajouter une nouvelle avion
if ($_POST OR @$_GET['action'])
    {               
    
    //                       ajouter avion
               if (isset($_GET['action'])and $_GET['action']== "add"){
                   
                   include'views/view_ajouter_avion.php';
                 
               if(isset($_POST['submit']) AND $_POST['submit']== "update"){
    
                                   $id=$_POST['id'];
                                   $capasite =$_POST['capasite'];
                                   $vol_effetue =$_POST['vol_effetue'];
                                  
           try {
                $inc =  include 'model/model_Gestion_avion.php';
                $insertion = new model_Gestion_avion($id,$capasite,$vol_effetue);
   
                        if ($insertion == TRUE)
                                    {
                                   echo '<script type ="text/javascript"> alert("Insertion d\'\avion terminer !");history.back(); </script>';
                                    }
                        else  {
                                    echo '<script type ="text/javascript"> alert("Insertion d\'\avion echouer !");history.back(); </script>';
                               }
                }
          catch (Exception $ex) 
                        {
                echo '<script type ="text/javascript"> alert("'.$ex->getMessage().'!");history.back(); </script>';
                          }
}
}
                          

                           //delete une avion 
            if (isset($_GET['action'])and $_GET['action']== "delete"){
                     try {
                        
                         include 'model/delete.php';
                         $id =$_GET['id'];
                         $del_avion = new delete();
                         $del_avion->deleterecordbyid($id);
               echo '<script type ="text/javascript"> alert("Supression d\'\avion terminer !");history.back(); </script>';

                     
                     } 
                     catch (Exception $ex) {
                        echo $ex->getMessage();
                     }
                 
     
    }
                        


                           // modifier avion 
    
         if (isset($_GET['action'])and $_GET['action']== "edit"){
        
        try{
            include 'model/display.php';
            $id =$_GET['id'];
            $editdata = new dispaly();
             $datarowedit =   $editdata->display($id);
           include 'views/edit_avion.php';
            
        } catch (Exception $ex) {
                        echo '<script type ="text/javascript"> alert("'. $ex->getMessage().'");history.back(); </script>';

        }
    }
   
         if(isset($_POST['submit']) AND $_POST['submit']== "edit"){
                       $dataedit['id'] = $_POST['id'];
                       $dataedit['capasite'] = $_POST['capasite'];
                       $dataedit['vol_effectue'] = $_POST['vol_effectue'];
                       try {
                          // $id =$_POST['id'];
                           
                           include_once 'model/edit.php';
                             $tabdata ="avion";
                             $editdata = new edit($tabdata ,$_POST['id'],$_POST['capasite'],$_POST['vol_effectue']);
                           $update=   $editdata->edite($id);
                       if ($update){
                            echo '<script type ="text/javascript"> alert("modification est reuusite "); </script>';
 
                       }
     
                       } catch (Exception $ex) {
                           echo $ex->getMessage();
                       }
                   }

    
    }
    
   
// affichier le tableau de l'avion existent 
  
    else
      {
 
            include 'model/affiche_tab_avion.php';
            $data = new affiche_tab_avion();
            $tab_affich =$data->getdata();
          
         include 'views/view_tab_avion.php ';
            
                  
      }   
              
   
    
           
    

    
    


    