<?php 
    $bdd = mysqli_connect('localhost','root','root','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd," SELECT nom, capacite FROM salles");

    $salles = mysqli_fetch_all($requete,MYSQLI_ASSOC);
    



?>

<!DOCTYPE html>
<html lang="en">
<head>
<table>
    <thead>
        <tr>
            <th>NOM</th>
            <th>CAPACITE</th>
            
        </tr>
     </thead>


<tbody>
    <?php 
        foreach($salles as $salle){
            echo '<tr><td>'.$salle['nom'].'<td>';
            echo '<td>'. $salle['capacite'].'</td>';
        }
    ?>

</tbody>
</table>
</head>
</html>