<?php

declare(strict_types=1);

include_once "./Worker.php";
include_once "./CarKeys.php";
include_once "./HouseKeys.php";
include_once "./Smartphone.php";
include_once "./TransportCard.php";
include_once "./Wallet.php";

$carKeys = new CarKeys();
$houseKeys = new HouseKeys();
$smartPhone = new Smartphone();
$transportCard = new TransportCard();
$wallet = new Wallet();

$worker = new Worker(
    $carKeys,
    $houseKeys,
    $smartPhone,
    $transportCard,
    $wallet
);

echo "Packing things...".PHP_EOL;

$worker->packThings();

echo $worker->showBagContent();
