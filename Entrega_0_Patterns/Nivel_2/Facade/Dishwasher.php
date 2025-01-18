<?php

include_once "./DishwareItem.php";
include_once "./Soap.php";
include_once "./Water.php";
include_once "./DrySystem.php";

class Dishwasher{

    private $dishwareItem;
    private $soap;
    private $water;
    private $drySystem;

    public function __construct(
        DishwareItem $dishwareItem,
        Soap $soap,
        Water $water,
        DrySystem $drySystem
        ){

            $this->dishwareItem = $dishwareItem;
            $this->soap = $soap;
            $this->water = $water;
            $this->drySystem = $drySystem;
    }

    public function clean(){
        $output = "";

        $output .= $this->dishwareItem->put();
        $output .= $this->soap->soap();
        $output .= $this->water->rinse();
        $output .= $this->drySystem->dry();
        $output .= "Clean :)";

        return $output;
    }
}