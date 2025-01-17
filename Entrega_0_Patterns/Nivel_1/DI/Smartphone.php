<?php

declare(strict_types=1);

class Smartphone{

    private string $name;

    public function __construct(){

        $this->name = "Smartphone";
    }

    public function __toString(){

        return $this->name;
    }
}