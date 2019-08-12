<?php

require_once "lib/Tail.php";

$filePath = "./test.log";
$tail = new Tail($filePath);

$func = function($record){
    echo $record;
};

$tail->run($func);
