<?php

class DiscountStrategy{

    private $discountStrategy;

    public function setDiscountstrategy(CarCuponGenerator $strategy){

        $this->discountStrategy = $strategy;
    }

    public function addSeasonDiscountStrategy(){

        return $this->discountStrategy->addSeasonDiscount();

    }

    public function addStockDiscountStrategy(){

        return $this->discountStrategy->addStockDiscount();
        

    }
}