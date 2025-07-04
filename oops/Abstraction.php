<?php

abstract class Bank{
     public $employeename;

     function __construct($employeename){
        $this->employeename=$employeename;
     }

     abstract function work();
}
class BankOfficer extends Bank{
    public function work(){
       echo "{$this->employeename} work as chashier";
    }
}
$Bank=new BankOfficer("Raj");
$Bank->work();
?>