<?php


class edit {

    private $tabdata;
    private $id;
    private $capasite;
    private $numvol;


    public function __construct($tabdata,$id,$capasite,$numvol) {
        $this->id =$id;
        $this->capasite =$capasite;
        $this->numvol = $numvol;
        $this->tabdata =$tabdata;
                                
        $this->coonection();
    }
    
         public function  coonection(){
    
          include_once 'model/database.php';
          $var = "include/variables.php";
          $this->cnx =  new database($var);
}
    
     
     function  edite($id){
         
         $query ="UPDATE $this->tabdata SET id = '$this->id',capasite = '$this->capasite' ,numvol ='$this->numvol' WHERE id ='$id' ;";
        
      //  echo $query;
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
    
    
    

