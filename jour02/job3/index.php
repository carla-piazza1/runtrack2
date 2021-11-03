<?php

    $val = 0;
    while($val <= 100){
        
        $val = $val + 1;
        if($val >= 0 && $val <=20){
            echo "<i> $val </i>" . "<br>";
        }
        else if($val == 42){
            echo  "Laplateforme" . "<br>";
        }
        else if($val >= 25 && $val <= 50){
            echo "<u> $val </u>" . "<br>";

        }


    }
?>