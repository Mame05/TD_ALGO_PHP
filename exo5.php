<?php
function trouverElementsCommuns($tableau1, $tableau2) {
    // On utilise la fonction array_intersect pour trouver les éléments communs
    $elementsCommuns = array_intersect($tableau1, $tableau2);

    return $elementsCommuns;
}

// On demande à l'utilisateur de saisir les éléments du premier tableau d'entier
echo "Entrez les éléments du premier tableau d'entier séparés par des espaces : ";
$input1 = trim(fgets(STDIN));
$tableau1 = array_map('intval', explode(' ', $input1));

// On demande à l'utilisateur de saisir les éléments du deuxième tableau d'entier
echo "Entrez les éléments du deuxième tableau d'entier séparés par des espaces : ";
$input2 = trim(fgets(STDIN));
$tableau2 = array_map('intval', explode(' ', $input2));

// On appele la fonction pour trouver les éléments communs
$elementsCommuns = trouverElementsCommuns($tableau1, $tableau2);

// Afficher le résultat
if (empty($elementsCommuns)) {
    echo "Il n'y a pas d'éléments communs entre les deux tableaux d'entier." . PHP_EOL;
} else {
    echo "Les éléments communs entre les deux tableaux d'entiers sont : " . implode(', ', $elementsCommuns) . PHP_EOL;
}
?>
