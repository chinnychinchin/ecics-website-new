<?php

spl_autoload_register(function ($class){
    require_once "model/$class" . ".php";
});

function printall($x){
    echo "<pre>";
    print_r($x);
    echo "</pre>";
}

?>