<?php

class Car
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
    }

    public function detail()
    {
        echo "Name:{$this->name} & Color:{$this->color}";
    }
}


class Volvo extends Car
{
    public $price;

    public function __construct($name, $color, $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    public function intro()
    {
        echo "Name: {$this->name}, Color: {$this->color} & Price: {$this->price}";
    }
}

$volvo = new Volvo("Volvo", 'Silver', '$40000');
$volvo->intro();
