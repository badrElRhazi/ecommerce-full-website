<?php
require_once 'Config.php';
require_once 'Functions.php';
require_once 'Database.php';
require_once 'Controller.php';
require_once 'App.php';
spl_autoload_register(function($classname){
   require_once $filename="../app/models/".ucfirst($classname).".php";
});