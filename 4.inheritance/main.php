<?php

require_once "lib/ChatTail.php";

$filePath = "./test.log";
$tail = new ChatTail($filePath);

$tail->run();
