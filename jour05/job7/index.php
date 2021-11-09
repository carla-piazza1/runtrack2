<?php
 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['str'], $_POST['fonction'])) {
    $result = '';
 
    switch ($_POST['fonction']) {
        case 'gras':
            $words = [];
 
            
            foreach (explode(' ', $_POST['str']) as $part) {
                
                if (trim($part) === '') {
                    continue;
                }
 
                
                if ($part[0] === mb_strtoupper($part[0])) {
                    $part = "<strong>{$part}</strong>";
                }
 
                $words[] = $part;
            }
 
            $result = implode(' ', $words);
 
            break;
        case 'cesar':
            $decalage = 3;
 
            foreach (str_split($_POST['str']) as $part) {
                $charCode = ord($part);
                $newCharCode = $charCode + $decalage;
 
                
                if ($charCode >= 65 && $charCode <= 90) {
                    if ($newCharCode > 90) {
                        $result .= chr(($newCharCode % 90) + 64);
                    } elseif ($newCharCode < 65) {
                        $result .= chr(90 - (64 - $newCharCode % 65));
                    } else {
                        $result .= chr($newCharCode);
                    }
 
                    continue;
                }
 
                
                if ($charCode >= 97 && $charCode <= 122) {
                    if ($newCharCode > 122) {
                        $result .= chr($newCharCode % 122 + 96);
                    } elseif ($newCharCode < 97) {
                        $result .= chr(122 - (96 - $newCharCode % 97));
                    } else {
                        $result .= chr($newCharCode);
                    }
 
                    continue;
                }
 
                $result .= $part;
            }
 
            break;
        case 'plateforme':
            
            $words = [];
 
            foreach (explode(' ', $_POST['str']) as $part) {
                if (strtolower(substr($part, -2)) === 'me') {
                    $words[] = "{$part}_";
 
                    continue;
                }
 
                $words[] = $part;
            }
 
            $result = implode(' ', $words);
 
            break;
        default:
            $result = 'Fonction inexistante';
            break;
    }
}
 
?>
 
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carla</title>
</head>
<body>
    <div><?= $result ?? null ?></div>
    <form action="carla.php" method="POST">
        <input type="text" name="str" placeholder="Texte" aria-label="Texte">
 
        <select name="fonction" aria-label="Fonction">
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select>
 
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>