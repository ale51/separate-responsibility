<?php

require_once "RecordHandler.php";

class SlackRecordHandler implements RecordHandler {
    function run(string $record){
        echo "この内容をSlackに通知" . $record;
    }
}
