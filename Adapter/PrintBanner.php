<?php

require('Banner.php');
require('PrintInterface.php');

class PrintBanner extends Banner implements PrintInterface
{
    /**
     * @param string
     * @return void
     */
    public function __construct(string $string) {
        parent::__construct($string);
    }

    public function printWeak()
    {
        parent::showWithParen();
    }

    public function printStrong()
    {
        parent::showWithAster();
    }
}