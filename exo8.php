<?php
function calculerMedian($tableau) {
    // On trie le tableau par ordre croissant
    sort($tableau);

    // On calcule la taille du tableau
    $taille = count($tableau);

    // On calcule la position médiane
    $milieu = floor(($taille - 1) / 2);

    // Vérification si le tableau a une taille paire ou impaire
    if ($taille % 2 == 0) {
        // Si la taille est paire, on calcule la moyenne des deux valeurs médianes
        $median = ($tableau[$milieu] + $tableau[$milieu + 1]) / 2;
    } else {
        // Si la taille est impaire, on prend la valeur médiane directement
        $median = $tableau[$milieu];
    }

    return $median;
}

// On demande à l'utilisateur de saisir les éléments du tableau séparés par des espaces
echo "Entrez les éléments du tableau séparés par des espaces : ";
$input = trim(fgets(STDIN));
// Converssion de la chaîne d'entrée en un tableau d'entiers
$tableau = array_map('intval', explode(' ', $input));
// On utilise la fonction calculerMedian pour obtenir le résultat
$resultat = calculerMedian($tableau);

echo "La médiane du tableau est : " . $resultat . PHP_EOL;
?>
