<?php

$str = "i'm sorry Dave i'm afraid i can't do that";
$voy = "aeiouy";
    
for($i=0;isset($str[$i]);$i++)
    for($j=0;isset($voy[$j]); $j++){
        if ($str[$i] == $voy[$j])
            echo $voy[$j].'<br>';
    }      
        

