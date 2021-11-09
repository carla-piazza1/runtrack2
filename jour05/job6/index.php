<?php 

function leetspeak($str){
    
    for($i=0;isset($str[$i]);$i++){
        if($str[$i] == "A" || $str[$i] == "a"){ 
            $str[$i] = "4";
        }
        else if($str[$i] == "B" || $str[$i] == "b"){
            $str[$i] = "8";
        } 
        else if($str[$i] == "E" || $str[$i] == "e"){
            $str[$i] = "3";
        }
        else if($str[$i] == "G" || $str[$i] == "g"){
            $str[$i] = "6";
        }
        else if($str[$i] == "L" || $str[$i] == "l"){
            $str[$i] = "1";
        }
        else if($str[$i] == "S" || $str[$i] == "s"){
            $str[$i] = "5";
        }
        else if($str[$i] == "T" || $str[$i] == "t"){
            $str[$i] = "7";
        }
    }
    return $str;
}
echo leetspeak("A,B,E,G,L,S,T,a,b,e,g,l,s,t")
?>