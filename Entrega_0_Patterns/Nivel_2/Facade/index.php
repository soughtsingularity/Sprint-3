<?php

include_once "./DishwareItem.php";
include_once "./Soap.php";
include_once "./Water.php";
include_once "./DrySystem.php";
include_once "./Dishwasher.php";

$dishwareItemn = new DishwareItem();
$soap = new Soap();
$water = new Water();
$drySystem = new DrySystem();

$dishwasher = new Dishwasher($dishwareItemn, $soap, $water, $drySystem);

echo $dishwasher->clean();


