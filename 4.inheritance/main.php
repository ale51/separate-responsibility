<?php

require_once "lib/ChatTail.php";

$filePath = "./test.log";
$chatTail = new ChatTail($filePath);

$chatTail->run();
