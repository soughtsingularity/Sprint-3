<?php

declare(strict_types=1);

include_once "./CarKeys.php";
include_once "./HouseKeys.php";
include_once "./Smartphone.php";
include_once "./TransportCard.php";
include_once "./Wallet.php";

class Worker{

    private CarKeys $carKeys;
    private HouseKeys $houseKeys;
    private Smartphone $smartPhone;
    private TransportCard $transportCard;
    private Wallet $wallet;
    private array $bag = [];

    public function __construct(
        CarKeys $carKeys,
        HouseKeys $houseKeys,
        Smartphone $smartPhone,
        TransportCard $transportCard,
        Wallet $wallet,
        ){
            $this->carKeys = $carKeys;
            $this->houseKeys = $houseKeys;
            $this->smartPhone = $smartPhone;
            $this->transportCard = $transportCard;
            $this->wallet = $wallet;
            $this->bag = [];

        }

    public function packThings(){
        
        $this->bag = [
            $this->carKeys,
            $this->houseKeys,
            $this->smartPhone,
            $this->transportCard,
            $this->wallet
        ];
    }

    public function getBagContent(){
        return $this->bag;
    }

    public function showBagContent(){

        $objects = "";

        foreach ($this->getBagContent() as $object){
            $objects .= $object->__toString() . PHP_EOL;
        }

        return $objects;

    }
}