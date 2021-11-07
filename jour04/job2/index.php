<?php 
$i =0;
foreach($_GET as $value){
    $i++;
}
echo $i;
var_dump($_GET);
?>

<form action="./index.php" method= "get">
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
           
                <?php foreach($_GET as $key => $value){
                     echo "<tr> <td>". $key. "</td> ";
                     echo " <td>".$value. "</td> </tr>";
                }
                                       

                ?>
                
        
           
        </tbody>
        
     </table>
</div>