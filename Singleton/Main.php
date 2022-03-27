<?php

require('Singleton.php');
require('TicketMaker.php');
require('Triple.php');

echo 'start';
echo "\n";

$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

if ($singleton1 === $singleton2) {
    echo '同じインスタンスです。';
    echo "\n";
} else {
    echo '同じインスタンスではありません。';
    echo "\n";
}

echo 'End';
echo "\n";

$ticketMaker1 = TicketMaker::getInstance();
$ticketMaker2 = TicketMaker::getInstance();

$ticketMaker1->getNextTicketNumber();
$ticketMaker2->getNextTicketNumber();

$triple1 = Triple::getInstance(0);
$triple2 = Triple::getInstance(0);

echo $triple1->toString();
echo "\n";
echo $triple2->toString();
echo "\n";




