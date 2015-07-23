<table class="table table-bordered gestionavion tableau">
    <tr class="btn-danger">
        <th>Nom vol : </th>
        <th>airopot du depart  : </th>  
        <th>airopot du distination :</th>
        <th>heure du depart :</th>
        <th>heure du distination : </th>
        <th> date du depart :</th>
        <th> date du distination :</th>
        <th> etat de vol:</th>

        
      
        <th>Action :</th>
        
    </tr>
    <tr>
       
    </tr>

 <?php       // numvol airopotdepart   airopotdistination   heuredeprt   heuredistination  datedepart datedistination

 for($i=0 ; $i<count($tab_affich) ; $i++){
     //<th> numero du vol : </th>
    //<td>{$tab_affich[$i]['id']}</td>
        echo " <tr>
                
              <td>{$tab_affich[$i]['numvol']}</td>
                  
              <td>{$tab_affich[$i]['airopotdepart']} </td>
                <td>{$tab_affich[$i]['airopotdistination']}</td>
                <td>{$tab_affich[$i]['heuredeprt']}</td>
                <td>{$tab_affich[$i]['heuredistination']}</td>
                <td>{$tab_affich[$i]['datedepart']}</td>
                <td>{$tab_affich[$i]['datedistination']}</td>
               <td>{$tab_affich[$i]['etat_vol']}</td>

                  
               <td>
               <a href='?page=Gestion_des_vols&action=delete&id={$tab_affich[$i]['numvol']}'><img src='ressources/img/delete.png'></a> 
               <a href='?page=Gestion_des_vols&action=edit&id={$tab_affich[$i]['numvol']}'><img src='ressources/img/edit.jpg'></a> 

              </td>
              
      </tr> ";
    
       
   }
?>
</table>