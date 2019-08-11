<?php

require_once "Tail.php";

class SlackTail extends Tail {
    function recordHandler(string $record){
        echo "This message is sent via Slack: " . $record;
    }
}
