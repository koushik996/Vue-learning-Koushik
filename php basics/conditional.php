<?php
$name="koushik";
if($name=="ram"){
    echo "if is working";
}
elseif($name=="Koushik"){
    echo "elseif working";
}
else{
    echo "else is working";
}
$game_level=19;
switch($game_level){
    case 1: 
        echo "easy level";
    break;
    case 2: 
        echo "moderate level";
    break;
    case 3: 
        echo "hard level";
    break;
    default:
        echo "Invalid input";
}

?>