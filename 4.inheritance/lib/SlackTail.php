<?php

require_once "Tail.php";

class SlackTail extends Tail {
    function recordHandler(string $record){
        echo $record . " is sent via Slack.";
    }
}
