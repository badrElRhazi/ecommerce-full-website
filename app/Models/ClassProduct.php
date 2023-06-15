<?php
class ClassProduct
{
  use Database;
  public function findAll()
  {
    $query=" select * from products";
    
    return $this->query($query);
  }
  public function findetails($id)
  {
    $query=" select * from products where id=$id";
    
    return $this->query($query);
  }
  public function findSporty(){
    
    $query="SELECT * FROM products WHERE category_id=1 ";
    $row= $this->query($query);
    return $row;
  }
  public function findShort(){
    
    $query="SELECT * FROM products WHERE category_id=2 ";
    $row= $this->query($query);
    return $row;
  }
  public function find($id)
  {
      $query = "SELECT * FROM products WHERE id =$id ";
      $row = $this->get_row($query);
      return $row;
  }
  
  public function ajouter($name,$short_description,$description,$price,$category_id,$pro_pic)
  {
    $query = "INSERT INTO products (`id`, `name`, `short_description`,`description`,`price`,`category_id`,`pro_pic`) VALUES (null, '$name', '$short_description','$description','$price','$category_id','$pro_pic')";
    $this->query($query);
  }
  public function supprimer($id)
  {
    $query = "DELETE  FROM products WHERE id = $id";
    $row = $this->get_row($query);
    
  }
  public function modifier($id,$name,$short_description,$description,$price,$category_id)
  {
    $query = "UPDATE products SET name = '$name', short_description='$short_description' ,description='$description',price ='$price',category_id=$category_id WHERE id = $id";
    return $this->query($query);
  }


}


?>