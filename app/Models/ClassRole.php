<?php
class ClassRole
{
  use Database;
  public function findAll()
  {
    $query=" SELECT * FROM roles";
    
    return $this->query($query);
  }
  
  public function find($id)
  {
      $query = "SELECT * FROM roles WHERE id =$id ";
      $row = $this->get_row($query);
      return $row;
  }
 
  public function ajouter($code,$name)
  {
   $query = "INSERT INTO roles (`id`, `code`, `name`) VALUES (null, '$code', '$name')";
    $this->query($query);
  }
  public function supprimer($id)
  {
    $query = "DELETE  FROM roles WHERE id = $id";
    
    $row = $this->get_row($query);
    
  }
  public function modifier($id, $code, $name)
{
    $query = "UPDATE roles SET code = '$code', name = '$name' WHERE id = $id";
    return $this->query($query);
}
}
?>