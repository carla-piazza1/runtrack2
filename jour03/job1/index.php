<?php

    $array = [200, 204, 173, 98, 171, 404, 459];
        var_dump($array);
    for($i = 0; isset($array[$i]); $i++){
        if($array[$i] % 2 == 0){
            echo $array[$i]. 'pair <br>';
        }
            echo $array[$i] . 'impair <br>';
    }
?>