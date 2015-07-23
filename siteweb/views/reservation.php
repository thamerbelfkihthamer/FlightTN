<h1>reservation VIEWS</h1>
<div id="reservation">
<form action="" method="post">
 <label> airopot de depart : 
       <select name="airopotdepart">
            <optgroup label="afrique">
           <option value="Tunisie">Tunisie</option>
            <option value="France">France</option>
            <option value="Italy">Italy</option>
            <option value="Espagne">Espagne</option>
            <option value="Brezil">Brezil</option> 
            </optgroup>
            <optgroup label="Europe">
           <option value="Tunisie">Tunisie</option>
            <option value="France">France</option>
            <option value="Italy">Italy</option>
            <option value="Espagne">Espagne</option>
            <option value="Brezil">Brezil</option> 
            </optgroup>
       </select>
 </label><br>
    
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
    <label>N passport : <input type="text" name="passport"></label>
<label> Pseudo : <input type="text" name="pseudo"></label>
<label> Nombre de place :
        <select name="nbplace">
            <optgroup label="">
           <option value="un">1</option>
            <option value="deux">2</option>
            <option value="trois">3</option>
            <option value="quatre">4</option>
            <option value="cinque">5</option> 
            </optgroup>
       </select>
    </label>
    
    
    <label> date de départ : <input type="date" name="datedepart"> </label><br>
   
    <input type="submit" name="submit" value="Rechercher" class="btn-primary" ><br>
   
</form>
    </div>

