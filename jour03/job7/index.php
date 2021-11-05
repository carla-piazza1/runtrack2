<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$str2 = "";


for($i=-1; isset($str[$i]); $i++);
    for($j=0; isset($str2[$j]); $j++){
        ($str2[$j] = $str[$i+1]);
        echo $str;
    }
        
?>