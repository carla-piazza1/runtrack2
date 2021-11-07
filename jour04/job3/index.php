<?php 
$i =0;
foreach($_POST as $value){
    $i++;
    
}
echo $i;


?>

<form action="./index.php" method= "POST">
    <label for="fname"> Prenom: </label>
    <input type= "texte" id="fname" name="fname"><br><br>
    <label for="lname">Nom:</label>
    <input type="texte" id="lname" name="lname"><br><br>
    <input type="submit" value="Submit">
</form>