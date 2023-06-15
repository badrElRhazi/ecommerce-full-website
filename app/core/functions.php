<?php
function show ($stuff){
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}
function esc($string){
    return htmlspecialchars($string);
}
function redirect($path){
    header("location:".ROOT."/".$path);
    die;
}

?>