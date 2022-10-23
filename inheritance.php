<?php

class Car
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->car  = $color;
    }

    public function detail()
    {
        echo "The name of the car is {$this->name} and color of the car is {$this->color}";
    }
}

class Volvo extends Car
{
    public function message()
    {
        echo "Am i car or bike?<br>";
    }
}

$volvo = new Volvo("Volvo", "Silver");

$volvo->message();

$volvo->detail();


echo "<hr>";
echo "# access modifier for inheritance<br>";

class Contact
{
    public $name;
    public $phone;
    public $email;

    public function __construct($name, $phone, $email)
    {
        $this->name  = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function detail()
    {
        echo "Name: {$this->name}, Phone: {$this->phone} & Email: {$this->email}";
    }

    protected function intro()
    {
        echo  "write code here";
    }
}


class  Address extends Contact
{
    public function show()
    {
        echo "Could you please share your contact?<br>";
    }
}


# try to call all 4 method from outside class

$address = new Address("Shuvo", "01640545551", "shuvo47cse@gmail.com");

$address->show();

$address->detail();

# not working for this method because protected method not working from outside
// $address->intro();

echo "<hr>";

echo "Calling protected method from inside derived class. <br>";

class Fruit
{
    public $color;
    public $price;

    public function  __construct($color, $price)
    {
        $this->color = $color;
        $this->price = $price;
    }

    protected function intro()
    {
        echo "Fruits Color: {$this->color} &  Price: {$this->price}";
    }
}

class Mango extends Fruit
{
    public function show()
    {
        $this->intro();
    }
}

$mango = new Mango('Green', 200.00);
$mango->show();