<?php
class ClassUser
{
  use Database;  
  public function findAll()
  {
    $query="SELECT * FROM users";
    
    return $this->query($query);
  }
  public function find($id)
  {
      $query = "SELECT * FROM users WHERE id =$id ";
      $row = $this->get_row($query);
      return $row;
  }
  
  public function ajouter($name,$email,$username,$password,$role_id)
  {
    $query = "INSERT INTO users (`id`, `name`, `email`,`username`,`password`,`role_id`) VALUES (null, '$name', '$email','$username','$password','$role_id')";
    $this->query($query);
  }
  public function supprimer($id)
  {
    $query = "DELETE  FROM users WHERE id = $id";
    $row = $this->get_row($query);
    
  }
  public function modifier($id, $name, $email,$username,$password,$role_id)
{
    $query = "UPDATE users SET name = '$name', email='$email' ,username='$username',password ='$password',role_id=$role_id WHERE id = $id";
    return $this->query($query);
}


}


?>