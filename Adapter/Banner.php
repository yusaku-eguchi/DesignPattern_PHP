<?php

class Banner
{
    /** @var string */
    private string $string;

    /**
     * @param string
     */
    public function __construct(string $string) {
        $this->string = $string;
    }

    public function showWithParen()
    {
        echo '(' . $this->string . ')';
    }

    public function showWithAster()
    {
        echo '*' . $this->string . '*';
    }

}