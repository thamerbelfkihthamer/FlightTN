<?php

class edit_vol {
    
    

    public function __construct($tabdata,$etat_vol) {
      
        $this->etat_vol =$etat_vol;
       
                    $this->tabdata =$tabdata;
                                 
        $this->coonection();
    }
    
         public function  coonection(){
    
          include_once 'model/database.php';
          $var = "include/variables.php";
          $this->cnx =  new database($var);
}
    
     
     function  edite($id){
         $query = "UPDATE $this->tabdata SET etat_vol = '$this->etat_vol' WHERE numvol = '$id' ;";
       $sql = mysql_query($query);
       
               if(!$sql){
                         throw new Exception ("UPDATE DATA NOT WORKED");
 }
               else {
                        return true;
               }   
     }
     }


     
     
     function close (){
    $this->cnx->close();
}
 
