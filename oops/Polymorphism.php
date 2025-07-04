<?php
class Fruit{

    public $name;
    public $price;

    public function __construct($name,$price){
        $this->name=$name;
        $this->price=$price;
    }

    public function intro(){
        echo "{$this->name} is a fruit and it's price {$this->price} <br>";
    }
}

class Grapes{

    public $weight;

    public function __construct($name,$price,$weight){
             
        $this->name=$name;
        $this->price=$price;
        $this->weight=$weight;
    }
    public function intro(){
       echo "{$this->name} is a fruit ,with weight {$this->weight} and it's price {$this->price} ";
    }
}
$grapes=new Grapes("grapes",100,"1kg");
$grapes->intro();
?>