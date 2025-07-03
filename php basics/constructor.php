<?php
class Student{

    public $name;
    public $age;
    public $phone;

    function __construct($name,$age,$phone){
        $this->name=$name;
        $this->age=$age;
        $this->phone=$phone;
    }

    function get_name(){
        return $this->name;
    }
    function get_age(){
        return $this->age;
    }
    function get_phone(){
        return $this->phone;
    }

}
$human=new Student("koushik",21,87654345);
echo $human->get_name();
echo "<br>";
echo $human->get_age();
echo "<br>";
echo $human->get_phone();
?>