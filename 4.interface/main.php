<?php

require_once "lib/Tail.php";
require_once "lib/ChatRecordHandler.php";

$filePath = "./test.log";
$tail = new Tail($filePath);

$chat = new ChatRecordHandler();

$tail->run($chat);
