<h4>Ajouter Vol :</h4>
<br>
<form action="" method="POST" class="volform">
    <label> Nom de Vol : <input type="text" name="numvol" class="input-sm"></label><br/>
    <label>Nom d'avion : <input type="text" name="numavion" class="input-sm"></label><br/>
    <label> airopot de depart : 
        <select name="airopotdepart">
            <option value="Tunisie">Tunisie</option>
            <option value="France">France</option>
            <option value="Italy">Italy</option>
            <option value="Espagne">Espagne</option>
            <option value="Brezil">Brezil</option>  
        </select>
    </label>
    
    <label> Airopot distination :
        <select name="airopotdistination">
            <optgroup label="airopot">
           <option value="Tunisie">Tunisie</option>
            <option value="France">France</option>
            <option value="Italy">Italy</option>
            <option value="Espagne">Espagne</option>
            <option value="Brezil">Brezil</option> 
            </optgroup>
       </select>
    </label><br/>
    <label> heure de départ : <input type="time" name="heuredeprt" > </label>
    <label> heure distination : <input type="time" name="heuredistination">  </label> <br/>
    <label> date de départ : <input type="date" name="datedepart"> </label>
    <label> date de distination : <input type="date" name="datedistination"></label><br>
    <label> etat de vol :
        <select name="etat_vol">
            <optgroup label="etat vol">
           <option value="atterit">atterrit</option>
            <option value="en_retard">en retard</option>
            <option value="Confirmer">Confirmer</option>
            </optgroup>
       </select>
    </label><br/>
    <input type="submit" name="submit" value="Ajouter" class="btn-primary" >
    
    
    
    
</form>


