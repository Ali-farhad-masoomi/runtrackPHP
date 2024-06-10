<?php
// Définition de la fonction leetSpeak()
function leetSpeak($str) {
    // Tableau de conversion pour leet speak
    $leet = [
        'A' => '4', 'a' => '4',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'I' => '1', 'i' => '1',
        'O' => '0', 'o' => '0',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    ];

    // Parcourir chaque caractère de la chaîne et effectuer la conversion
    $leetStr = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (array_key_exists($char, $leet)) {
            $leetStr .= $leet[$char];
        } else {
            $leetStr .= $char;
        }
    }

    // Retourner la chaîne convertie
    return $leetStr;
}

// Exemple d'utilisation de la fonction leetSpeak()
$originalStr = "Bonjour tout le monde";
$leetStr = leetSpeak($originalStr);
echo "Chaîne originale : $originalStr<br>";
echo "Chaîne en leet speak : $leetStr<br>";
?>

