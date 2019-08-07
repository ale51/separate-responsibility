<?php

require_once "lib/SlackTail.php";

$filePath = "./test.log";
$tail = new SlackTail($filePath);

$tail->run();
