<?php

declare(strict_types=1);

class HouseKeys{

    private string $name;

    public function __construct(){

        $this->name = "House keys";
    }

    public function __toString(){

        return $this->name;
    }
}