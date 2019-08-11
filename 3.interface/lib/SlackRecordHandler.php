<?php

require_once "RecordHandler.php";

class SlackRecordHandler implements RecordHandler {
    function run(string $record){
        echo $record . " is sent via Slack.";
    }
}
