<div id="tabutlisateur">
<table   class="table table-bordered gestionavion tableau">
    <tr class="btn-danger">
        <th>id : </th>
        <th> Nom : </th>
        <th>Prenom: </th> 
         <th>E-mail: </th>  
         <th>Pseudo : </th> 
       <th>Mot de passe: </th>  


        <th>Action :</th>
    </tr>
    <tr>
       
    </tr>
  
        
        
 
    <?php
    // id , capasite,vol_effectue
    
   for($i=0 ; $i<count($tab_affich) ; $i++){
    
        echo " <tr>
                <td>{$tab_affich[$i]['id']}</td>
              <td>{$tab_affich[$i]['nom']}</td>
              <td>{$tab_affich[$i]['prenom']} </td>
           <td>{$tab_affich[$i]['email']} </td>
       <td>{$tab_affich[$i]['pseudo']} </td>
       <td>{$tab_affich[$i]['password']} </td>



               <td>
               <a href='?page=Gestion_des_utilisateurs&action=ajouter&id={$tab_affich[$i]['id']}'><img src='ressources/img/delete.png'></a> 
               <a href='?page=Gestion_des_utilisateurs&action=delete&id={$tab_affich[$i]['id']}'><img src='ressources/img/delete.png'></a> 
               <a href='?page=Gestion_des_utilisateurs&action=edit&id={$tab_affich[$i]['id']}'><img src='ressources/img/edit.jpg'></a> 

              </td>
              
      </tr> ";
    
       
   }
    
   
   
    ?>
    
</table>
    </div>


