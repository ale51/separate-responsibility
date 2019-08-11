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

    function run(callable $func)
    {
        $fp = fopen($this->filePath, 'r');

        $position = $this->getLastPosition($fp);

        do {

            $nextPosition = $this->getLastPosition($fp);

            if ($nextPosition > $position) {

                fseek($fp, $position);

                $record = fread($fp, $nextPosition - $position);

                $func($record);
            }

            $position = $nextPosition;

            sleep(self::SLEEP_INTERVAL);

        } while (true);
    }

    private function getLastPosition($fp): int
    {
        fseek($fp, 0, SEEK_END);
        return ftell($fp);
    }
}