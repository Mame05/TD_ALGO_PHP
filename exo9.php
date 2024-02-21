<?php
function calculerFrequences($chaine) {
    // Initialiser un tableau associatif pour stocker les fréquences
    $frequences = [];

    // Parcourir chaque caractère de la chaîne
    for ($i = 0; $i < strlen($chaine); $i++) {
        $caractere = $chaine[$i];

        // Ignorer les espaces pour cet exemple, mais vous pouvez ajuster selon vos besoins
        if ($caractere != ' ') {
            // Incrémenter la fréquence du caractère dans le tableau
            if (isset($frequences[$caractere])) {
                $frequences[$caractere]++;
            } else {
                $frequences[$caractere] = 1;
            }
        }
    }

    return $frequences;
}

// On demande à l'utilisateur de saisir une chaînes de caractère
echo "Saisissez une chaine de caractère : ";
$input = trim(fgets(STDIN));
$resultat = calculerFrequences($input);

// Afficher le résultat
echo "La fréquence de chaque caractère dans la chaîne est de :\n";
foreach ($resultat as $caractere => $frequence) {
    echo "$caractere : $frequence\n";
}
?>
