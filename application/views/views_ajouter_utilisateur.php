<form action="" method="POST" class="avionform">
    <h4>Ajouter utilisateur : </h4></br>
    <label>id :</label>
    <input required="required"  type="text" placeholder="N avion :" name="id" value=" <?php  echo $datarowedit['id']; ?>" >
    <label>Nom :</label>
    <input type="text"  name="nom"  value="<?php echo $datarowedit['nom']?> " >
    <label>Prenom: </label>
    <input type="text"  name="prenom" value="<?php  echo $datarowedit['prenom']; ?>">
    <label>E-mail: </label>
    <input type="email"  name="email" value="<?php  echo $datarowedit['email']; ?>">
    <label>Pseudo: </label>
    <input type="text"  name="pseudo" value="<?php  echo $datarowedit['pseudo']; ?>">
    <label>Mot de passe: </label>
    <input type="password"  name="motdepass" value="<?php  echo $datarowedit['password']; ?>">
    <input class="btn-primary" type="submit" value="ajouter" name="submit">
</form> 

