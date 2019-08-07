<?php
//require_once "vendor/autoload.php";

$sleepInterval = 1;
$filePath = "./test.log";

//    anonymous-function

$fp = fopen($filePath, 'r');

// 一番末尾のポインタの位置を取得
$position = getLastPosition($fp);

do{

    // 一番末尾のポインタの位置を取得
    $nextPosition = getLastPosition($fp);

    // ポインタが増えている場合
    if($nextPosition > $position){

        // 現在のポインタをセット
        fseek($fp, $position);

        // 現在のポインタから増加分のデータを取得
        $record = fread($fp, $nextPosition - $position);

        if(preg_match("/^ERROR/", $record)) {
            echo $record;
        }
    }

    // ポインタの更新
    $position = $nextPosition;

    sleep($sleepInterval);

}while(true);

function getLastPosition($fp): int
{
    fseek($fp, 0, SEEK_END);
    return ftell($fp);
}