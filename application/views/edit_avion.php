<form action="" method="POST" class="avionform">
    <h4>Edit avion : </h4></br>
    <label>N avion :</label>
    <input   type="text" placeholder="N avion :" name="id" value="<?php  echo $datarowedit['id']; ?>" >
    <label>capasite :</label>
    <input type="text" placeholder="capasiter" name="capasite"  value="<?php echo $datarowedit['capasite']?> " >
    <label>vol effetuer : </label>
    <input type="text" placeholder="vol effetuer" name="vol_effectue" value="<?php  echo $datarowedit['numvol']; ?>">
    <input class="btn-primary" type="submit" value="edit" name="submit">
</form> 

