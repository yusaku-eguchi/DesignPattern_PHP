<?php

class StringDisplay extends AbstractDisplay
{
    /** @var string */
    private string $string;
    /** @var int */
    private int $width;

    /**
     * @param string $string
     */
    public function __construct(string $string) {
        $this->string = $string;
        $this->width = strlen(mb_convert_encoding($string, 'SJIS', 'UTF-8'));
    }

    /** 
     * @return void
     */
    public function open(): void
    {
        $this->printLine();   
    }

    /**
     * @return void
     */
    public function print(): void
    {
        echo '|' . $this->string . '|';
        echo "\n";
    }

    /**
     * @return void
     */
    public function close(): void
    {
        $this->printLine();
    }

    /**
     * @return void
     */
    private function printLine(): void
    {
        echo '+';
        for ($i=0; $i < $this->width; $i++) { 
            echo '-';
        }
        echo '+';
        echo "\n";
    }
}