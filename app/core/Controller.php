<?php
Trait Controller
{
  public function view($name1,$name,$data=[])
  {
    if(!empty($data)){
      extract($data);
    }
    $filename ="../app/views/".$name1."/".$name.".php";
        if(file_exists($filename)){
            require_once $filename;
        }
        else{
           $filename="../app/views/404.view.php";
           require_once $filename;
        }
  }
}