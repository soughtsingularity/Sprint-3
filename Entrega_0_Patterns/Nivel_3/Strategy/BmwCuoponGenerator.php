<?php

declare(strict_types=1);

include_once "./CarCouponGenerator.php";

class BmwCouponGenerator implements CarCuponGenerator{

    private float $discount = 0;

    public function __construct(){
        $this->discount = 0;
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function addSeasonDiscount(){

        $this->discount = 5;

        return "Get {$this->getDiscount()}% off the price of your new Bmw car.".PHP_EOL;

    }

    public function addStockDiscount(){

        $this->discount = 7;

        return "Get {$this->getDiscount()}% off the price of your new Bmw car.".PHP_EOL;
    }

}