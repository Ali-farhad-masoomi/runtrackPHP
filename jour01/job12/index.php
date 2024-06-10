<?php
function calcule($nombre1, $operation, $nombre2) {
    
    $resultat = 0;


    switch ($operation) {
        case '+':
            $resultat = $nombre1 + $nombre2;
            break;
        case '-':
            $resultat = $nombre1 - $nombre2;
            break;
        case '*':
            $resultat = $nombre1 * $nombre2;
            break;
        case '/':
            
            if ($nombre2 != 0) {
                $resultat = $nombre1 / $nombre2;
            } else {
                return "Erreur : Division par zéro";
            }
            break;
        case '%':
            $resultat = $nombre1 % $nombre2;
            break;
        default:
            return "Erreur : Opération non valide";
    }

    // Retourner le résultat
    return $resultat;
}

// Exemple d'utilisation de la fonction calcule()
echo calcule(10, '+', 5) . "<br>";  // Affiche 15
echo calcule(10, '-', 5) . "<br>";  // Affiche 5
echo calcule(10, '*', 5) . "<br>";  // Affiche 50
echo calcule(10, '/', 5) . "<br>";  // Affiche 2
echo calcule(10, '%', 3) . "<br>";  // Affiche 1
echo calcule(10, '/', 0) . "<br>";  // Affiche Erreur : Division par zéro
echo calcule(10, '@', 5) . "<br>";  // Affiche Erreur : Opération non valide
?>

