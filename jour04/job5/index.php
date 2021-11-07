<!-- Faire un formulaire de connexion de type POST (se demander, pourquoi
pas GET ?) ayant deux input nommés username et password.
Après validation du formulaire, si le username est “John” et le password
est “Rambo” afficher : “C’est pas ma guerre” sinon afficher “Votre pire
cauchemar”. -->

<?php 

var_dump($_POST);

if(isset($_POST["username"])&& isset($_POST["password"])){


if($_POST["username"] == "John" && $_POST["password"] == "Rambo"){
    echo "c'est pas ma gurerre";
}
else{
    echo "Votre pire cauchemar";
}
}

?>

<form action="" method= "post">
    <label for="username"> usrname </label>
    <input type= "texte" id="username" name="username"><br><br>
    <label for="password">password</label>
    <input type="texte" id="password" name="password"><br><br>
    <input type="submit" value="submit">
</form>