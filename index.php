<?php

//1

class Price {
    public $price;
    public $valute;
    public function __construct($price, $valute)
    {
        $this -> price = $price;
        $this -> valute = $valute;
    }
    public function __toString(){
        $text = "The price is {$this -> price}{$this -> valute}";
        if ($this -> price > 9 ){
            return $text.'s';
        }else {
            return $text;
    }
}
    }
    
$price = new Price(10, " euro");
echo $price . '<br>'; // should print “The price is 10 euros”
$price = new Price(1, " dollar");
echo $price . '<br>'; // should print “The price is 1 dollar”

//2

class Rectangle {
    public $length;
    public $width;
    public function __construct($length, $width)
    {
        $this -> length = $length;
        $this -> width = $width;
    }

    public function area () {
        return $this -> length * $this -> width;
    }

}
class Square extends Rectangle {
    public $sq;
    public function __construct($sq)
    {
        $this -> length = $sq;
        $this -> width = $sq;
    }

}

$rec = new Rectangle(5, 4);
echo 'Rec= ' . $rec->area () . '<br>'; // 20
$sq = new Square(6);
echo 'Sq= ' . $sq->area (); // 36
