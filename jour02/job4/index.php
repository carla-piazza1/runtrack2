<?php

    $val = 1;
    while($val <= 100){
        
        if ($val % 3 ==0 && $val % 5 ==0){
            echo "FizzBuzz" . "<br>";
        }
        else if ($val % 3 == 0){
            echo "Fizz" . "<br>";
        }
        else if ($val % 5 ==0){
            echo "Buzz" . "<br>";
        }
        else {
            echo $val . "<br>";
        }
        $val = $val +1 ;
    }   
