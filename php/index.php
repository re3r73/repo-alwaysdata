<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test PHP sur Alwaysdata</title>
    <style>
        body {
            background-color: #f0f4f8;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .container {
            background: white;
            padding: 30px;
            margin: 40px auto;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
        }

        h1, h2 {
            color: #333;
        }

        p, li {
            color: #555;
        }

        ul {
            padding-left: 20px;
        }

        pre {
            background: #eee;
            padding: 10px;
            border-radius: 6px;
            overflow-x: auto;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Affichage simple pour vérifier que le PHP fonctionne
        echo "<h1>Bonjour depuis le serveur Alwaysdata en PHP 🎉</h1>";

        // Affichage de la date et heure actuelle
        echo "<p>Nous sommes le <strong>" . date("d/m/Y") . "</strong> et il est <strong>" . date("H:i:s") . "</strong>.</p>";

        // Variables PHP
        $nom = "Jérémie";
        echo "<p>Bienvenue, $nom ! Ceci est un test PHP sur Alwaysdata.</p>";

        // Petit tableau PHP
        $langages = ["HTML", "CSS", "JavaScript", "PHP"];
        echo "<h2>🧠 Quelques langages du web :</h2>";
        echo "<ul>";
        foreach ($langages as $langage) {
            echo "<li>$langage</li>";
        }
        echo "</ul>";

        // Blague aléatoire
        $blagues = [
            "Pourquoi les développeurs n'aiment pas la nature ? — Parce qu'il y a trop de bugs 🐛",
            "Combien de programmeurs faut-il pour changer une ampoule ? — Aucun, c'est un problème hardware 💡",
            "J'ai un problème de récursivité... Attendez, je vous explique après. 🔄",
            "Pourquoi Java a-t-il du mal à faire des relations ? — Trop de classes abstraites ☕"
        ];
        $blagueAleatoire = $blagues[array_rand($blagues)];
        echo "<h2>😂 Une petite blague de dev :</h2>";
        echo "<p>$blagueAleatoire</p>";

        // Fake uptime du serveur
        $secondsSinceMidnight = time() - strtotime("today");
        $hours = floor($secondsSinceMidnight / 3600);
        $minutes = floor(($secondsSinceMidnight % 3600) / 60);
        $seconds = $secondsSinceMidnight % 60;
        echo "<h2>⏱️ Temps écoulé depuis minuit :</h2>";
        echo "<p>$hours heures, $minutes minutes et $seconds secondes.</p>";

        // Infos serveur
        echo "<h2>🔧 Infos sur le serveur :</h2>";
        echo "<pre>";
        print_r($_SERVER);
        echo "</pre>";
        ?>
    </div>
</body>
</html>
