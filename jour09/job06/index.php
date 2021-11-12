<?php 
    $bdd = mysqli_connect('localhost','root','root','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd,"SELECT * ,  COUNT(*) AS nb_etudiants FROM `etudiants`");

    $etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);
    var_dump($etudiants);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<table>
    <thead>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>Nombre etudiants</th>
            
            
        </tr>
     </thead>


<tbody>
    <?php 
        foreach($etudiants as $etudiant){
            echo '<tr><td>'.$etudiant['nom'].'<td>';
            echo '<td>'. $etudiant['prenom'].'</td>';
            echo '<td>'. $etudiant ['nb_etudiants']. '</td></tr>';

        }
            
    ?>

</tbody>
</table>
</head>
</html>