<?php 

function bonjour($jour){
    if($jour == true){
        echo "Bonjour";
    }
    else
        echo "jour";
}

bonjour($jour = true);
?>