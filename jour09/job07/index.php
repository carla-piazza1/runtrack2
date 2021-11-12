<?php 
    $bdd = mysqli_connect('localhost','root','root','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd,"SELECT * , SUM(superficie) AS superficie_totale FROM etage;");

    $etage = mysqli_fetch_all($requete,MYSQLI_ASSOC);
    var_dump($etage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<table>
    <thead>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>Superficie</th>
            
            
        </tr>
     </thead>


<tbody>
    <?php 
        foreach($etage as $un_etage){
            echo '<tr><td>'.$un_etage['nom'].'<td>';
            echo '<td>'. $un_etage['numero'].'</td>';
            echo '<td>'. $un_etage ['superficie_totale']. '</td></tr>';

        }
            
    ?>

</tbody>
</table>
</head>
</html>