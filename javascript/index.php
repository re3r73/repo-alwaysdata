<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Sommaire automatique</title>
</head>
<body>
    <h1>Sommaire automatique des pages du dossier</h1>
    <ul>
        <?php
        // Ouvre le dossier courant
        $dossier = opendir('.');
        // Parcourt tous les fichiers du dossier
        while (($fichier = readdir($dossier)) !== false) {
            // Filtrer : ignorer les dossiers "." et ".." et les fichiers non HTML/PHP
            if ($fichier != '.' && $fichier != '..' && preg_match('/\.(html|php)$/', $fichier)) {
                // Affiche le lien vers le fichier
                echo "<li><a href=\"$fichier\">$fichier</a></li>";
            }
        }
        // Ferme le dossier
        closedir($dossier);
        ?>
    </ul>
</body>
</html>

