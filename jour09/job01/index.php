<?php 
    $bdd = mysqli_connect('localhost','root','root','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd," SELECT * FROM etudiants");

    $etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);
    



?>

<!DOCTYPE html>
<html lang="en">
<head>
<table>
    <thead>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>ID</th>
        </tr>
     </thead>


<tbody>
    <?php 
        foreach($etudiants as $etudiant){
            echo '<tr><td>'.$etudiant['nom'].'<td>';
            echo '<td>'. $etudiant['prenom'].'</td>';
            echo '<td>'. $etudiant ['id']. '</td></tr>';

        }
    
    
    
    ?>

</tbody>
</table>
</head>
</html>