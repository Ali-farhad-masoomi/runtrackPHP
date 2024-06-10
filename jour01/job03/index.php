<?php
// Création des variables de types primitifs
$integerVar = 42;
$floatVar = 3.14;
$stringVar = "Hello, world!";
$booleanVar = true;
$arrayVar = [1, 2, 3];
$nullVar = null;

// Création du tableau HTML
echo "<table border='1'>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>";

// Fonction pour ajouter une ligne au tableau
function addRow($type, $name, $value) {
    echo "<tr>
            <td>$type</td>
            <td>$name</td>
            <td>$value</td>
          </tr>";
}

// Ajout des variables et de leurs informations dans le tableau
addRow(gettype($integerVar), 'integerVar', $integerVar);
addRow(gettype($floatVar), 'floatVar', $floatVar);
addRow(gettype($stringVar), 'stringVar', $stringVar);
addRow(gettype($booleanVar), 'booleanVar', $booleanVar ? 'true' : 'false');
addRow(gettype($arrayVar), 'arrayVar', json_encode($arrayVar));
addRow(gettype($nullVar), 'nullVar', 'null');

// Fermeture du tableau HTML
echo "</tbody></table>";
?>
