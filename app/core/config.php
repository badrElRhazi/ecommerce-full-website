<?php
if($_SERVER['SERVER_NAME']=='localhost'){
    define('DBNAME','ecommerce');
    define('DBHOST','localhost');
    define('DBUSER','root');
    define('DBPASS','');
    define ('ROOT','http://localhost/mvcsite/public');
}
else
{
    define ('ROOT','http://www.yourwebsite.com');
}

define('APP_NAME','My website');
define('APP_DESC','BEST SITE EVER');
define ('DEBUG',true);




?>