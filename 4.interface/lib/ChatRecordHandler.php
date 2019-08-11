<?php

require_once "RecordHandler.php";

class ChatRecordHandler implements RecordHandler {
    function run(string $record){
        echo "This message is sent via chat: " . $record;
    }
}
