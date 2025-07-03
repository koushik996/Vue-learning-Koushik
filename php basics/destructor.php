<?php
class Employee{
    public $id;
    public $name;

    function __construct($id,$name){
        $this->id=$id;
        $this->name=$name;
    }

    function __destruct(){
        echo "The Employee Id {$this->id} and his Name {$this->name}";
    }
}
 $Employee=new Employee(10,"Ram");
 
?>