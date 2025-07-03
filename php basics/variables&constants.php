<?php
$str="hello";
$num=5;
$float=2.23;

echo $str;
echo $num;
echo "<h1>".$float."</h1>";

$laptops=array("hp","lenovo","dell");
echo var_dump($laptops[1]);

define("message","how are your");
echo message;

define("fruits",["apple","banana","orange"]);
echo var_dump(fruits);
 echo fruits[1];
 ?>