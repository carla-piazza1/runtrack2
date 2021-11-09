<?php 

function calcule($i,$operation,$j){
    if($operation == "+" ){
        echo $i + $j;
    }
    else if($operation == "-"){
        echo $i - $j;
    }
    else if($operation == "*"){
        echo $i * $j;
    }
    else if($operation == "/"){
        echo $i / $j;
    }
    else if($operation == "%"){
        echo $i % $j;
    }
}
$i= 3;
$j= 2;
$operation = "-";
calcule($i,$operation,$j);
?>