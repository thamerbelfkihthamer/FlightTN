<table class="table table-bordered gestionavion tableau">
    <tr class="btn-danger ">
        <th>Nom vol : </th>
        <th>airopot du depart  : </th>  
        <th>airopot du distination :</th>
        <th>heure du depart :</th>
        <th>heure du distination : </th>
        <th> date du depart :</th>
        <th> date du distination :</th>
        <th>Action :</th>
        
    </tr>
    <tr>
       
    </tr>

 <?php       // numvol airopotdepart   airopotdistination   heuredeprt   heuredistination  datedepart datedistination

 for($i=0 ; $i<count($tab_affich_reservation) ; $i++){
     //<th> numero du vol : </th>
    //<td>{$tab_affich[$i]['id']}</td>
        echo " <tr>
                
              <td>{$tab_affich_reservation[$i]['numvol']}</td>
                  
              <td>{$tab_affich_reservation[$i]['airopotdepart']} </td>
                <td>{$tab_affich_reservation[$i]['airopotdistination']}</td>
                <td>{$tab_affich_reservation[$i]['heuredeprt']}</td>
                <td>{$tab_affich_reservation[$i]['heuredistination']}</td>
                <td>{$tab_affich_reservation[$i]['datedepart']}</td>
                <td>{$tab_affich_reservation[$i]['datedistination']}</td>
                  
               <td>
               <a href='?page=reservation&action=reserver'><img src='images/img/reserver.jpg'></a> 
               <a href='?page=reservation&action=edit&id={$tab_affich_reservation[$i]['numvol']}'><img src='images/img/edit.jpg'></a> 

              </td>
              
      </tr> ";
    
       
   }
?>
</table>

