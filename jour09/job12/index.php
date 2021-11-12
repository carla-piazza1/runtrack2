<?php 
    $bdd = mysqli_connect('localhost','root','root','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd,"SELECT `prenom`, `nom`, `naissance` FROM `etudiants` WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01'");

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
            <th>Date Naissance</th>
            
            
        </tr>
     </thead>


<tbody>
    <?php 
        foreach($etudiants as $etudiant){
            echo '<tr><td>'.$etudiant['nom'].'<td>';
            echo '<td>'. $etudiant['prenom'].'</td>';
            echo '<td>'. $etudiant ['naissance']. '</td></tr>';

        }
            
    ?>

</tbody>
</table>
</head>
</html>