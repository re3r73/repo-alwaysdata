<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Sommaire automatique de Jérémie</title>
    <style>
        body {
            background-color: #f0f4f8;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .section {
            background: white;
            padding: 20px;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            color: #777;
        }
    </style>
</head>
<body>
    <h1>📄 Sommaire automatique de Jérémie</h1>

    <div class="section">
        <h2>Liste des pages du dossier :</h2>
        <ul>
            <?php
            // Récupère les fichiers du dossier courant
            $fichiers = scandir('.');
            // Filtre les fichiers valides
            $pages = array_filter($fichiers, function($fichier) {
                return is_file($fichier) && preg_match('/\.(html|php)$/', $fichier) && $fichier !== 'index.php';
            });
            // Trie alphabétiquement
            sort($pages);
            // Affiche les liens
            foreach ($pages as $page) {
                $titre = pathinfo($page, PATHINFO_FILENAME);
                echo "<li><a href=\"$page\">$titre</a></li>";
            }
            ?>
        </ul>
    </div>

    <div class="footer">
        Généré dynamiquement avec PHP - Version stylisée par Jérémie
    </div>
</body>
</html>
