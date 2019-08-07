<?php

class Tail
{

    private $filePath;
    const SLEEP_INTERVAL = 1;

    /**
     * Tail constructor.
     * @param $filePath
     */
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    function run()
    {
        $fp = fopen($this->filePath, 'r');

        // 一番末尾のポインタの位置を取得
        $position = $this->getLastPosition($fp);

        do {

            // 一番末尾のポインタの位置を取得
            $nextPosition = $this->getLastPosition($fp);

            // ポインタが増えている場合
            if ($nextPosition > $position) {

                // 現在のポインタをセット
                fseek($fp, $position);

                // 現在のポインタから増加分のデータを取得
                $record = fread($fp, $nextPosition - $position);

                if (preg_match("/^ERROR/", $record)) {
                    $this->recordHandler($record);
                }
            }

            // ポインタの更新
            $position = $nextPosition;

            sleep(self::SLEEP_INTERVAL);

        } while (true);
    }

    protected function recordHandler(string $record){
        // デフォルトでは何もしない
    }

    private function getLastPosition($fp): int
    {
        fseek($fp, 0, SEEK_END);
        return ftell($fp);
    }
}