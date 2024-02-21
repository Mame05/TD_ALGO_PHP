<?php
function elementsSansDoublons($tableau) {
    // Utiliser la fonction array_count_values pour compter les occurrences de chaque élément
    $occurrences = array_count_values($tableau);

    // Filtrer les éléments qui n'ont qu'une occurrence (pas de doublons)
    $elementsSansDoublons = array_filter($tableau, function($element) use ($occurrences) {
        return $occurrences[$element] === 1;
    });

    return array_values($elementsSansDoublons);
}

// On demande à l'utilisateur de saisir les éléments du tableau
echo "Entrez les éléments du tableau séparés par des espaces : ";
$input = trim(fgets(STDIN));
$tableau = array_map('intval', explode(' ', $input));
$resultat = elementsSansDoublons($tableau);

echo "Les éléments sans doublons du tableau sont : " . implode(', ', $resultat) . PHP_EOL;
?>
