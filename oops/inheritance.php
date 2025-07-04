<?php
class Person{

    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }

    public function activity(){
        echo "{$this->name} can walk,eat,sleep <br>";
    }
}

class Raj extends Person{

    public function work(){
        echo "raj can also work for their family";
    }
}

$Raj=new Raj("raj",28);
$Raj->activity();
$Raj->work();
?>