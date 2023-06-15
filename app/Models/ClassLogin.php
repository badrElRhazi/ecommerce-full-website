<?php
class ClassLogin
{
  use Database;  
  public function findAll()
  {
    $query=" select * from users";
    return $this->query($query);
  }
  public function find($username,$password)
{
  $query = "SELECT * FROM users WHERE username='$username' and password='$password' and role_id='1'";
  $result = $this->query($query);
  if (is_array($result) && count($result) > 0) {
    return true;
  } else {
    return false;
  }
}
public function find2($email,$password)
{
  $query = "SELECT * FROM users WHERE email='$email' and password='$password' and role_id='2'";
  $result = $this->query($query);
  if (is_array($result) && count($result) > 0) {
    return true;
  } else {
    return false;
  }
}
public function ajouter($name,$email,$username,$password,$role_id)
  {
    $query = "INSERT INTO users (`id`, `name`, `email`,`username`,`password`,`role_id`) VALUES (null, '$name', '$email','$username','$password','$role_id')";
    $this->query($query);
  }

}

?>