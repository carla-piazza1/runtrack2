<?php 

function occurences($str,$char){
    $compteur = 0;
    for($i=0;isset($str[$i]);$i++){ 
        if($str[$i] == $char){
            $compteur++;
        }
    }
    echo $compteur;
    return $compteur;
}

 occurences("banane","a");


?>