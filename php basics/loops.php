<?php
function number(){
for($var=1;$var<=5;$var++){
    echo "From function :$var <br>";
}
}
$var=1;
// while($var<=5){
//   echo "$var <br>";
//   $var++;
// }
do{
    echo "number :$var <br>";
}
while($var>5);
number()
?>
