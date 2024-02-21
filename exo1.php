<?php
function calculProduit($tableau) {
    if (empty($tableau)) {
        return "Le tableau est vide.";
    }

    $produit = 1;

    foreach ($tableau as $nombre) {
        $produit *= $nombre;
    }

    return $produit;
}

// Demander à l'utilisateur de saisir un tableau d'entiers
echo "Entrez les nombres du tableau séparés par des espaces : ";
$input = trim(fgets(STDIN));

// Convertir la chaîne d'entrée en un tableau d'entiers
$tableauEntiers = array_map('intval', explode(' ', $input));

// Calculer le produit des éléments du tableau
$resultat = calculProduit($tableauEntiers);

// Afficher le résultat
echo "Le produit des nombres est : " . $resultat . PHP_EOL;
?>
