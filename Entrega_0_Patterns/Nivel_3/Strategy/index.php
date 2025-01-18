<?php

include_once "./BmwCuoponGenerator.php";
include_once "./MercedesCuoponGenerator.php";
include_once "./CarCouponGenerator.php";
include_once "./DiscountStrategy.php";

$discountStrategy = new DiscountStrategy();

$discountStrategy->setDiscountstrategy(new BmwCouponGenerator());
echo $discountStrategy->addSeasonDiscountStrategy();
echo $discountStrategy->addStockDiscountStrategy();

$discountStrategy->setDiscountstrategy(new MercedesCouponGenerator());
echo $discountStrategy->addSeasonDiscountStrategy();
echo $discountStrategy->addStockDiscountStrategy();
