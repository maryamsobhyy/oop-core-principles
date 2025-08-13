<?php

namespace App;

class TestClass
{

    public $size=10;
    public function sayHello()
    {
        return "Hello from TestClass! . $this->size";
    }
}
