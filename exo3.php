<?php
function rotationDroite($tableau, $positions) {
    // Vérification si le tableau est vide ou pas et que le nombre de positions est positif
    if (empty($tableau) || $positions < 0) {
        return $tableau; // Rien à faire
    }

    $taille = count($tableau);

    // Utilisation de l'opérateur modulo pour gérer le cas où le nombre de positions est supérieur à la taille du tableau
    $positions = $positions % $taille;

    // On extrait les éléments à déplacer
    $elementsDeplaces = array_slice($tableau, -$positions);

    // Oxtrait les éléments restants
    $elementsRestants = array_slice($tableau, 0, $taille - $positions);

    // Concaténation des deux parties dans le bon ordre
    $nouveauTableau = array_merge($elementsDeplaces, $elementsRestants);

    return $nouveauTableau;
}

// On demande à l'utilisateur de saisir les éléments du tableau séparés par des espaces
echo "Entrez les éléments du tableau séparés par des espaces : ";
$input = trim(fgets(STDIN));
// Converssion de la chaîne d'entrée en un tableau d'entiers
$tableauInitial = array_map('intval', explode(' ', $input));
// On demande à l'utilisateur de donner la position de rotation qu'il souhaite
echo "Entrez la position de rotation : "; 
$positionsRotation = intval(trim(fgets(STDIN)));
// On appelle la fonction rotationDroite pour effectuer la rotation
$resultat = rotationDroite($tableauInitial, $positionsRotation);

echo "Le tableau initial est : " . implode(', ', $tableauInitial) . PHP_EOL;
echo "Le tableau après rotation à droite de $positionsRotation positions est : " . implode(', ', $resultat) . PHP_EOL;
?>
