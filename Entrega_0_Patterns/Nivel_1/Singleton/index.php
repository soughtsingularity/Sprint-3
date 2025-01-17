<?php

declare(strict_types=1);
include_once "./Tigger.php";

$tigger1 = Tigger::getInstance();
$tigger1->roar();
$tigger1->roar();

echo "Number of roars: " . $tigger1->getCounter() . PHP_EOL;

$tigger2 = Tigger::getInstance();
$tigger2->roar();

echo "Number of roars: " . $tigger2->getCounter() . PHP_EOL;