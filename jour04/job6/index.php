<!-- Faire un formulaire de type get avec un input text nommé “nombre” et un
bouton submit.
Après validation du formulaire, si la valeur entrée est un nombre pair,
afficher “Nombre pair”, si c’est un nombre impair, afficher “Nombre impair”. -->

<?php 
var_dump($_GET);
if(isset($_GET["number"])){
    if($_GET["number"] %2 == 0){
        echo $_GET["number"]."pair";
    }
    else{
        echo $_GET["number"]."impaire";
    }
}
?>

<form action="" method= "get">
    <input type="number" id="name" name="number">
    <input type= "submit" id="rere" name= "rere">
</form>
