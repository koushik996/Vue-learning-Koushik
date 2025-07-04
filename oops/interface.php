<?php
interface Bike{

    public function setname($name);

    public function getname();
}

class Shine implements Bike{

    public $name;
   
    public function setname($name){
        $this->name=$name;
    }

    public function getname(){
         return $this->name;
    }
}
$Shine=new Shine();
$Shine->setname("shine");
echo $Shine->getname();

?>