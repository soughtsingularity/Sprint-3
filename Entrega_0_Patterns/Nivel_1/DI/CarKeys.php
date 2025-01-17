<?php

declare(strict_types=1);

class CarKeys{

    private string $name;

    public function __construct(){

        $this->name = "Car keys";
    }

    public function __toString(){

        return $this->name;
    }
}