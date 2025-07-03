<?php
  class Car{
   
    public $name;
    public $color;

    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
       return $this->name;
    }
    function set_color($color){
        $this->color=$color;
    }
    function get_color(){
        return $this->color;
    }
  }
$BMW=new Car();
$black=new Car();
$BMW->set_name("BMW");
$black->set_color("black");

echo $BMW->get_name();
echo "<br>";
echo $black->get_color();
  

?>