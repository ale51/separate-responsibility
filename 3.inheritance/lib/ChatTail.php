<?php

require_once "Tail.php";

class ChatTail extends Tail {
    function recordHandler(string $record){
        echo "This message is sent via chat: " . $record;
    }
}
