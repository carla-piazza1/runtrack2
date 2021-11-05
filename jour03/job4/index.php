<?php 

function mystr($str){
    $i = 0;
    while(isset($str[$i])){
        $i++;
    }
    return $i;
}
$str = "Dans l'espace, personne ne vous entend crier";
echo 'il y a '.mystr($str).' consonnes.';
?>