<?php 
    $bdd = mysqli_connect('localhost','root','root','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd,"SELECT salles.nom, etage.nom FROM salles INNER JOIN etage ON etage.id = salles.id_etage");

    $salles = mysqli_fetch_all($requete,MYSQLI_ASSOC);
    
    echo "<pre>";
    var_dump($salles);
    echo "<pre>";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<table>
    <thead>
        <tr>
            <th>nom</th>
            <th>id_etage</th>
            <th>capacite</th>
            
            
            
        </tr>
     </thead>


<tbody>
    <?php 
        foreach($salles as $sousTableau){
            
            foreach($sousTableau as $valu){

            echo '<td>'. $valu.'</td>';
            
            }
        }
      
    ?>

</tbody>
</table>
</head>
</html>