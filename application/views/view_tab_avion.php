<table class="table table-bordered gestionavion tableau">
    <tr class="btn-danger">
        <th>N avion : </th>
        <th> capasite : </th>
        <th>vol effetuer : </th>  
        <th>Action :</th>
    </tr>
    <tr>
       
    </tr>
  
        
        
 
    <?php
    // id , capasite,vol_effectue
    
   for($i=0 ; $i<count($tab_affich) ; $i++){
    
        echo " <tr>
                <td>{$tab_affich[$i]['id']}</td>
              <td>{$tab_affich[$i]['capasite']}</td>
              <td>{$tab_affich[$i]['numvol']} </td>
               <td>
               <a href='?page=Gestion_des_avions&action=delete&id={$tab_affich[$i]['id']}'><img src='ressources/img/delete.png'></a> 
               <a href='?page=Gestion_des_avions&action=edit&id={$tab_affich[$i]['id']}'><img src='ressources/img/edit.jpg'></a> 

              </td>
              
      </tr> ";
    
       
   }
    
   
   
    ?>
    
</table>
