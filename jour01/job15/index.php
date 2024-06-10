<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de transformation</title>
</head>
<body>
    <form action="" method="POST">
        <label for="str">Chaîne de caractères :</label>
        <input type="text" id="str" name="str" required>
        <br>
        <label for="transformation">Transformation :</label>
        <select id="transformation" name="transformation">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <br>
        <input type="submit" value="Transformer">
    </form>

    <?php
    // Étape 2 : Écrire des fonctions de transformation en PHP

    function gras($str) {
        return preg_replace('/\b([A-Z][a-z]*)\b/', '<strong>$1</strong>', $str);
    }

    function cesar($str, $decalage = 2) {
        $resultat = '';
        $decalage = $decalage % 26;
        for ($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            if (ctype_alpha($char)) {
                $code = ord($char) + $decalage;
                if (ctype_upper($char)) {
                    if ($code > ord('Z')) {
                        $code -= 26;
                    }
                } else {
                    if ($code > ord('z')) {
                        $code -= 26;
                    }
                }
                $resultat .= chr($code);
            } else {
                $resultat .= $char;
            }
        }
        return $resultat;
    }

    function plateforme($str) {
        return preg_replace('/\b(\w*me)\b/', '$1_', $str);
    }

    // Étape 3 : Traiter les données du formulaire

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $str = $_POST['str'];
        $transformation = $_POST['transformation'];
        $result = '';

        switch ($transformation) {
            case 'gras':
                $result = gras($str);
                break;
            case 'cesar':
                $result = cesar($str);
                break;
            case 'plateforme':
                $result = plateforme($str);
                break;
            default:
                $result = $str;
        }

        echo "<p>Résultat : $result</p>";
    }
    ?>
</body>
</html>
