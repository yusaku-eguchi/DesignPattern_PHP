<?php

require('AbstractDisplay.php');

class CharDisplay extends AbstractDisplay
{
    /** @var string */
    private string $string;

    public function __construct(string $string) {
        $this->string = $string;
    }

    /**
     * @return void
     */
    public function open(): void
    {
        echo '<<';   
    }

    /**
     * @return void
     */
    public function print(): void
    {
        echo $this->string;
    }

    /**
     * @return void
     */
    public function close(): void
    {
        echo '>>';
    }
}