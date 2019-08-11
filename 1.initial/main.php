<?php

$sleepInterval = 1;
$filePath = "./test.log";

$fp = fopen($filePath, 'r');

$position = getLastPosition($fp);

do{

    $nextPosition = getLastPosition($fp);

    if($nextPosition > $position){

        fseek($fp, $position);

        $record = fread($fp, $nextPosition - $position);

        echo $record;
    }

    $position = $nextPosition;

    sleep($sleepInterval);

}while(true);

function getLastPosition($fp): int
{
    fseek($fp, 0, SEEK_END);
    return ftell($fp);
}