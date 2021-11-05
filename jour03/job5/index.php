<?php 

$dic = [
    "voyelle" => "a,e,i,o,u,y",
    "consonne" => "b,c,d,f,g,h,j,k,l,m,n,p,q,r,s,t,v,x,z",
];

$str = "On n est pas le meilleur quand on le croit mais quand on le sait”";

$compteur = 0;
$compteur2 = 0;

for($i = 0;isset($str[$i]); $i++){
    for($j = 0; isset($dic["voyelle"][$j]); $j++){
        if($str[$i] == $dic["voyelle"][$j]) {
            $compteur++; 
        }
    }     
    for($k = 0; isset($dic["consonne"][$k]); $k++){
        if($str[$i] == $dic["consonne"][$k]){
            $compteur2++;
        }
    }        
}
?>

<table>
    <theah>
        <th>Voyelles</th>
        <th>Consonnes</th>
    </theah>
<body>

<td> <?php echo $compteur ?></td>
<td> <?php echo $compteur2 ?></td>

</body>

</table>


