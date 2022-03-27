<?php

require('IDCardFactory.php');

$factory = new IDCardFactory();

$idCard1 = $factory->create('結城浩');
$idCard2 = $factory->create('江口優作');
$idCard3 = $factory->create('足立啓太');
$idCard1->use();
$idCard2->use();
$idCard3->use();