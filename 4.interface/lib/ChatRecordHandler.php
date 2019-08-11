<?php

require_once "RecordHandler.php";

class ChatRecordHandler implements RecordHandler {
    function run(string $record): void
    {
        echo "This message is sent via chat: " . $record;
    }
}
