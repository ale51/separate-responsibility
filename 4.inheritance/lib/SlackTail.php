<?php

require_once "Tail.php";

class SlackTail extends Tail {
    function recordHandler(string $record){
        echo "この内容をSlackに通知" . $record;
    }
}
