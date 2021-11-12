<?php 
    $bdd = mysqli_connect('localhost','root','root','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd,"SELECT *, SUM(capacite) AS capacite_totale FROM `salles`");

    $salles = mysqli_fetch_all($requete,MYSQLI_ASSOC);
    var_dump($salles);
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
            <th>capacite totale</th>
            
            
        </tr>
     </thead>


<tbody>
    <?php 
        foreach($salles as $salle){
            echo '<tr><td>'.$salle['nom'].'<td>';
            echo '<td>'. $salle['id_etage'].'</td>';
            echo '<td>'. $salle['capacite'].'</td>';
            echo '<td>'. $salle ['capacite_totale']. '</td></tr>';

        }
            
    ?>

</tbody>
</table>
</head>
</html>