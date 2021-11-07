<?php 
$i =0;
foreach($_POST as $value){
    $i++;
}
echo $i;
var_dump($_POST);
?>

<form action="./index.php" method= "POST">
    <label for="fname"> Prenom: </label>
    <input type= "texte" id="fname" name="fname"><br><br>
    <label for="lname">Nom:</label>
    <input type="texte" id="lname" name="lname"><br><br>
    <input type="submit" value="Submit">
</form>

<div class= "container">
    <table>
        
        <thead>
            <tr>
                <th>Argument</th>
                <th>Value</th>
            <tr>
         </thead>
        <tbody>
           
                <?php foreach($_POST as $key => $value){
                     echo "<tr> <td>". $key. "</td> ";
                     echo " <td>".$value. "</td> </tr>";
                }
                                       

                ?>
                
        
           
        </tbody>
        
     </table>
</div>