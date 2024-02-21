<?php
function supprimerDoublons() {
    // Demander à l'utilisateur de saisir les éléments du tableau séparés par des espaces
    echo "Entrez les éléments du tableau séparés par des espaces : ";
    $input = trim(fgets(STDIN));

    // Convertir la chaîne d'entrée en un tableau d'entiers
    $tableau = array_map('intval', explode(' ', $input));

    // Utiliser la fonction array_unique pour supprimer les doublons
    $tableauSansDoublons = array_unique($tableau);

    // Réindexer le tableau pour réorganiser les clés
    $tableauSansDoublons = array_values($tableauSansDoublons);

    return $tableauSansDoublons;
}

// Appeler la fonction et obtenir le tableau sans doublons
$tableauSansDoublons = supprimerDoublons();

// Afficher le résultat
echo "Tableau sans doublons : " . implode(', ', $tableauSansDoublons) . PHP_EOL;
?>
