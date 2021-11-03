<?php
    $val = 0;
    while($val <= 1337){
        
        $val = $val + 1;
        if(!($val == 26 || $val == 37 || $val == 88 || $val == 1111)){
            echo $val . "<br>";
        }
        
    }
?>
