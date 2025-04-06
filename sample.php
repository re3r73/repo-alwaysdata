<?php
// Affichage simple pour vérifier que le PHP fonctionne
echo "<h1>Bonjour depuis le serveur Alwaysdata en PHP 🎉</h1>";

// Affichage de la date et heure actuelle
echo "<p>Nous sommes le " . date("d/m/Y") . " et il est " . date("H:i:s") . ".</p>";

// Variables PHP
$nom = "Jérémie";
echo "<p>Bienvenue, $nom ! Ceci est un test PHP sur Alwaysdata.</p>";

// Petit tableau PHP
$langages = ["HTML", "CSS", "JavaScript", "PHP"];

echo "<h2>Quelques langages du web :</h2>";
echo "<ul>";
foreach ($langages as $langage) {
    echo "<li>$langage</li>";
}
echo "</ul>";

// Infos serveur
echo "<h2>Infos sur le serveur :</h2>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>
