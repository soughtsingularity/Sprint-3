<?php

declare(strict_types=1);

class TransportCard{

    private string $name;

    public function __construct(){

        $this->name = "Transport card";
    }

    public function __toString(){

        return $this->name;
    }
}