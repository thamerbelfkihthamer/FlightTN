<div class="tabreservation" >
<table class="table table-bordered gestionavion tableau">
    <tr class="btn-danger">
        <th>id : </th>
        <th>airopot du depart  : </th>  
        <th>airopot du distination :</th>
       <th> nombre de place:</th>
        <th> date du depart :</th>
    

        
      
        <th>Action :</th>
        
    </tr>
    <tr>
       
    </tr>

 <?php       // numvol airopotdepart   airopotdistination   heuredeprt   heuredistination  datedepart datedistination

 for($i=0 ; $i<count($tab_affich) ; $i++){
     //<th> numero du vol : </th>
    //<td>{$tab_affich[$i]['id']}</td>
        echo " <tr>
                
              <td>{$tab_affich[$i]['id']}</td>    
              <td>{$tab_affich[$i]['airopotdepart']} </td>
                <td>{$tab_affich[$i]['airopotdistination']}</td>
               <td>{$tab_affich[$i]['nbplace']}</td>
                   <td>{$tab_affich[$i]['datedepart']}</td>

                  
               <td>
               <a href='?page=Gestion_des_vols&action=delete&id={$tab_affich[$i]['id']}'><img src='ressources/img/delete.png'></a> 

              </td>
              
      </tr> ";
    
       
   }
?>
</table>
</div>



