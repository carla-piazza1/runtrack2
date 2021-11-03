<?php
$val = 1 ; 
$div = 0 ;
$compt = 1 ;

    for($val = 0; $val <1000; $val++){
        $compt = 0 ;
        for($div = 1; $div <1000; $div++){
            if($val % $div ==0){
                $compt++;
            }
        }
        if($compt ==2){
            echo $val . "<br>";
        }
    }