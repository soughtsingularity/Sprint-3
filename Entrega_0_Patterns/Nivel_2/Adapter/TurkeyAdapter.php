<?php

declare(strict_types=1);

class TurkeyAdapter {

    private $turkey;

    public function __construct($turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack() {
           echo "Gobble gobble \n";
    }

    public function fly() {
        echo  str_repeat("I'm flying a short distance \n", 5);
    }
}