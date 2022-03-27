<?php

require('PrintBanner.php');

$printBanner = new PrintBanner('Hello');

$printBanner->printWeak();
echo "\n";
$printBanner->printStrong();
echo "\n";