<?php

require('CharDisplay.php');
require('StringDisplay.php');

$d1 = new CharDisplay('H');

$d2 = new StringDisplay('Hello World');

$d3 = new StringDisplay('こんにちは。');

$d1->display();
echo "\n";
$d2->display();
echo "\n";
$d3->display();
echo "\n";
