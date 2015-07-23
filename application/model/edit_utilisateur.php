<?php


class edit_utilisateur {

    
    

    private $tabdata; 
    private $dataedit;
    private $pass;
    private $pseudo ;


    public function __construct($dataedit,$tabdata,$pass,$pseudo) {
        $this->dataedit = $dataedit;
        $this->pass = $pass;
        $this->pseudo =$pseudo;
        if (is_array($dataedit)){
                    $this->tabdata =$tabdata;
                                 }
        $this->coonection();
    }
    
         public function  coonection(){
    
          include_once 'model/database.php';
          $var = "include/variables.php";
          $this->cnx =  new database($var);
}
    
     
     function  edite($id){
         $query = "UPDATE $this->tabdata SET pseudo = '$this->pseudo',password = '$this->pass' WHERE id = $id;";
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
 
