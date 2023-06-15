<?php
// session_start();
// if (empty($_SESSION['username'])) {
//   header('location: ../login');
//   exit;
// }
require_once "../app/core/init.php";
if(DEBUG)
{
  ini_set('display_errors',1);
}
else{
    ini_set('display_errors',0);
}
$app=new App;
$app->loadController();
?>