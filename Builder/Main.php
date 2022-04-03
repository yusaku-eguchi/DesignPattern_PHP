<?php

require('TextBuilder.php');
require('Director.php');
require('HTMLBuilder.php');

if (count($_SERVER['argv']) == 1) {
    usage();
    exit(0);
}

if ($_SERVER['argv'][1] == 'plain') {
    $textBuilder = new TextBuilder();
    $director = new Director($textBuilder);
    $director->construct();
    $result = $textBuilder->getResult();
    echo $result . "\n";
} else if ($_SERVER['argv'][1] == 'html') {
    $htmlBuilder = new HTMLBuilder();
    $director = new Director($htmlBuilder);
    $director->construct();
    $filename = $htmlBuilder->getResult();
    echo $filename . "が作成されました。\n";
} else {
    usage();
    exit(0);
}


function usage()
{
    echo "Usage: php Main.php plain \n";
    echo "Usage: php Main.php html \n";
}