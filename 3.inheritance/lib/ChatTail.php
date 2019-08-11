<?php

require_once "Tail.php";

class ChatTail extends Tail {
    function recordHandler(string $record): void
    {
        echo "This message is sent via chat: " . $record;
    }
}
