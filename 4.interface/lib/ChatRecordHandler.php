<?php

require_once "RecordHandler.php";

class ChatRecordHandler implements RecordHandler {
    function handle(string $record): void
    {
        echo "This message is sent via chat: " . $record;
    }
}
