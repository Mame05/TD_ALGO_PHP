<?php
function compterVoyelles() {
    // Demander à l'utilisateur de saisir une chaîne de caractères
    echo "Entrez une chaîne de caractères : ";
    $chaine = trim(fgets(STDIN));

    // Définir le tableau des voyelles
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

    // Initialiser le compteur de voyelles
    $nombreVoyelles = 0;

    // Parcourir chaque caractère de la chaîne
    for ($i = 0; $i < strlen($chaine); $i++) {
        // Vérifier si le caractère est une voyelle
        if (in_array($chaine[$i], $voyelles)) {
            $nombreVoyelles++;
        }
    }

    return $nombreVoyelles;
}

// Appeler la fonction et obtenir le nombre de voyelles
$resultat = compterVoyelles();

// Afficher le résultat
echo "Le nombre de voyelles dans la chaîne est : $resultat" . PHP_EOL;
?>
