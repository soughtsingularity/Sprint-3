<?php

declare(strict_types=1);

class Tigger {

    private int $roars;
    private static $instance = null; 

    private function __construct(){
        echo "Building character..." . PHP_EOL;
        $this->roars = 0;
    }

    private function __clone(){}

    private function __wakeUp(){}

    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new Tigger();
        }

        return self::$instance;
    }

    public function getCounter(){
        return $this->roars;
    }

    public function roar(){
        echo "Grrr!" . PHP_EOL;
        $this->roars += 1;
    }
}