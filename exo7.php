<?php
function concatenerChaines($tableau) {
    // Utiliser la fonction implode pour concaténer les éléments du tableau
    $nouvelleChaine = implode('', $tableau);

    return $nouvelleChaine;
}

// On demande à l'utilisateur de saisir les éléments du tableau de chaînes séparés par des espaces
echo "Entrez les éléments du tableau de chaînes séparés par des espaces : ";
$input = trim(fgets(STDIN));

// Convertir la chaîne d'entrée en un tableau de chaînes
$tableauChaines = explode(' ', $input);
// On utilise la fonction concatenerChaines pour obtenir le résultat
$resultat = concatenerChaines($tableauChaines);

echo "La nouvelle chaîne est : " . $resultat . PHP_EOL;
?>
