<?php

interface RecordHandler{
    function handle(string $record): void;
}
