
<br>
<br>
<br>
<br>

<h4>Modifier etat de vol : </h4>

<label> etat de vol :
        <select name="etat_vol">
           
                 <?php  
    
                 if ( $datarowedit['etat_vol'] == "atterrit"){
                     echo '<option value="atterrit">atterrit</option>
            <option value="en_retard">en retard</option>
            <option value="Confirmer">Confirmer</option>';
                   
                             
                     
                 } 
                 
                 else if ($datarowedit['etat_vol'] == "en retard") {
                     
                     echo '<option value="en_retard">en retard</option>
                <option value="atterrit">atterrit</option>
          
            <option value="Confirmer">Confirmer</option>';
                 }
                 else {
                     echo ' <option value="Confirmer">Confirmer</option>
             <option value="en_retard">en retard</option>
                <option value="atterrit">atterrit</option>';
                     
                 }
     ?>
                
            
            
       </select>
    </label><br/>
    <input type="submit" name="submit" value="edit" class="btn-primary" >
   
    
    

    
    
    




