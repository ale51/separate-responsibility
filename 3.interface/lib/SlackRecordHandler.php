<?php

require_once "RecordHandler.php";

class SlackRecordHandler implements RecordHandler {
    function run(string $record){
        echo "This message is sent via Slack: " . $record;
    }
}
