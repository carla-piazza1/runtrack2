<?php
$val=7;
$bool=true;
$text="balbla";
$float=1.4;

echo '<!DOCTYPE >
<html>
<head>
    
</head>
<body>
        <table>

        <thead>
            <tr>
                <td>TYPE</td>
                <td>NOM</td>
                <td>VALEURS</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>entier</td>
                <td>val</td>
                <td>'.$val.'</td>
            </tr>
            <tr>
                <td>Flottant</td>
                <td>float</td>
                <td>'.$float.'</td>
            </tr>           
             <tr>
                <td>chaine de caracteres</td>
                <td>text</td>
                <td>'.$text.'</td>
            </tr>            
            <tr>
                <td>booleen</td>
                <td>bool</td>
                <td>'.$bool.'</td>
            </tr>
        </tbody>
    </table>   
    <style>
    table
    {
        border-collapse: collapse;
    }
    td
    {
        border: 1px solid black;
    }
    </style>
</body>
</html>';
?> 