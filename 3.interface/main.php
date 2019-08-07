<?php

require_once "lib/Tail.php";
require_once "lib/SlackRecordHandler.php";

$filePath = "./test.log";
$tail = new Tail($filePath);

$slack = new SlackRecordHandler();

$tail->run($slack);
