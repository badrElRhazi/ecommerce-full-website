<?php
class ClassCategorie
{
  use Database;
  public function findAll()
  {
    $query=" select * from categories";
    
    return $this->query($query);
  }
  
  public function find($id)
  {
      $query = "SELECT * FROM categories WHERE id =$id ";
      $row = $this->get_row($query);
      return $row;
  }
 
  public function ajouter($name)
  {
   $query = "INSERT INTO categories (`id`, `name`) VALUES (null, '$name')";
    $this->query($query);
  }
  public function supprimer($id)
  {
    $query = "DELETE  FROM categories WHERE id = $id";
    
    $row = $this->get_row($query);
    
  }
  public function modifier($id,$name)
{
    $query = "UPDATE categories SET name = '$name' WHERE id = $id";
    return $this->query($query);
}


}


?>