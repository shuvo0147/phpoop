<?php
class Car {
    final public function detail(){

    }
}

class Volvo extends Car {
    public function detail()
    {
        // show error because i use final keyword in base class detail method
    }
}