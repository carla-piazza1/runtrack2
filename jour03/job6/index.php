<?php 

$str = "Les choses que l'onpossede finissent par nous posseder.";

for($i = 0; isset($str[$i]); $i++);
for($i=$i-1; $i >= 0; $i--){

    echo $str[$i];
}
?>
