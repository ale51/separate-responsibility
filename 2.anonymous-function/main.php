<?php

require_once "lib/Tail.php";

$filePath = "./test.log";
$tail = new Tail($filePath);

$func = function($r){
    echo $r;
};

$tail->run($func);
