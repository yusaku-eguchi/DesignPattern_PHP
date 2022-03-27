<?php

require('Banner.php');
require('PrintAbstract.php');

class PrintBanner extends PrintAbstract
{
    /** @var Banner */
    private Banner $banner;

    /**
     * @param string
     * @return void
     */
    public function __construct(string $string) {
        $this->banner = new Banner($string);
    }

    public function printWeak()
    {
        $this->banner->showWithParen();
    }

    public function printStrong()
    {
        $this->banner->showWithAster();
    }
}