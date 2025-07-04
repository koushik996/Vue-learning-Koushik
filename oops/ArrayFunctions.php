<?php

$names="Ravi,Raju,Ramu,Rahul";

// explode
$ArrNam=explode(",",$names);
print_r($ArrNam);
echo "<br>";
var_dump($ArrNam);
echo "<br>";

// implode
echo implode("-",$ArrNam);
echo "<br>";

// count
$num=[1,2,3,43,2,1];
echo count($num);

// array_push
array_push($num,7);
echo count($num);


?>