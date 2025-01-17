<?php

declare(strict_types=1);

class Wallet{

    private string $name;

    public function __construct(){

        $this->name = "Wallet";
    }

    public function __toString(){

        return $this->name;
    }
}