<?php

require_once "lib/Tail.php";
require_once "lib/ChatRecordHandler.php";

$filePath = "./test.log";
$tail = new Tail($filePath);

$slack = new ChatRecordHandler();

$tail->run($slack);
