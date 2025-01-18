<?php

declare(strict_types=1);

include_once "./CarCouponGenerator.php";

class MercedesCouponGenerator implements CarCuponGenerator{

    private float $discount;

    public function __construct(){
        $this->discount = 0;
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function addSeasonDiscount(){

        $this->discount = 4;

        return "Get {$this->getDiscount()}% off the price of your new Mercedes car.".PHP_EOL;

    }

    public function addStockDiscount(){

        $this->discount = 10;

        return "Get {$this->getDiscount()}% off the price of your new Mercedes car.".PHP_EOL;
    }
    
}