<?php
 Trait Database
 {
    private function connect()
    {
        $string="mysql:hostname=".DBHOST.";dbname=".DBNAME."";
        return $con =new PDO($string,DBUSER,DBPASS);
    }
    public function query($query)
    {
   $con = $this->connect();
   $sql = $con->prepare($query);
   $check = $sql->execute();
   if ($check) {
      $result = $sql->fetchAll(PDO::FETCH_OBJ);
   
      if (is_array($result) && count($result)) {
         return $result;
      }       
   }
   return false;
  }
  public function get_row($query)
  {
     $con = $this->connect();
     $sql = $con->prepare($query);
     $check = $sql->execute();
     if ($check) {
        $result = $sql->fetchAll(PDO::FETCH_OBJ);
     
        if (is_array($result) && count($result)) {
           return $result[0];
        }       
     }
     return false;
  }
    

}
