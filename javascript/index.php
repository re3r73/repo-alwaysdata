<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Sommaire des Exercices JavaScript</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      color: #333;
      padding: 40px;
      margin: 0;
    }
    h1, h2 {
      color: #007BFF;
      text-align: center;
    }
    .exercices {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      max-width: 1000px;
      margin: 0 auto 60px;
    }
    .card {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      text-align: center;
    }
    .card h2 {
      color: #007BFF;
      font-size: 20px;
      margin-bottom: 10px;
    }
    .card p {
      font-size: 14px;
      color: #666;
      margin-bottom: 20px;
    }
    .card a {
      display: inline-block;
      padding: 8px 16px;
      background-color: #007BFF;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.2s ease-in-out;
    }
    .card a:hover {
      background-color: #0056b3;
    }

    /* Sommaire automatique */
    .section {
      background: white;
      padding: 20px;
      margin: 40px auto 20px;
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

    .section a {
      text-decoration: none;
      color: #007BFF;
      font-weight: bold;
      transition: color 0.3s;
    }

    .section a:hover {
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

  <h1>📘 Série d'exercices JavaScript – Sommaire visuel</h1>

  <div class="exercices">
    <div class="card">
      <h2>Exo 01 – Table HTML</h2>
      <p>Table de 5 écrite en pur HTML.</p>
      <a href="exo-01_consignes.html">Voir la consigne</a>
    </div>
    <div class="card">
      <h2>Exo 02 – Addition simple</h2>
      <p>Ajouter deux nombres via des inputs et un bouton.</p>
      <a href="exo-02_consignes.html">Voir la consigne</a>
    </div>
    <div class="card">
      <h2>Exo 03 – Table JS</h2>
      <p>Générer dynamiquement la table de 5.</p>
      <a href="exo-03_consignes.html">Voir la consigne</a>
    </div>
    <div class="card">
      <h2>Exo 04 – Table avec saisie</h2>
      <p>Saisir un nombre et générer sa table.</p>
      <a href="exo-04_consignes.html">Voir la consigne</a>
    </div>
    <div class="card">
      <h2>Exo 05 – Table réactive</h2>
      <p>Mettre à jour la table en direct.</p>
      <a href="exo-05_consignes.html">Voir la consigne</a>
    </div>
    <div class="card">
      <h2>Exo 06 – Table personnalisée</h2>
      <p>Nombre de base + limite de la table.</p>
      <a href="exo-06_consignes.html">Voir la consigne</a>
    </div>
    <div class="card">
      <h2>Exo 07 – Addition ou multiplication</h2>
      <p>Choisir l’opération à effectuer.</p>
      <a href="exo-07_consignes.html">Voir la consigne</a>
    </div>
    <div class="card">
      <h2>Exo 08 – Mini-calculatrice</h2>
      <p>Effectuer les 4 opérations de base.</p>
      <a href="exo-08_consignes.html">Voir la consigne</a>
    </div>
    <div class="card">
      <h2>Exo 09 – Ampoules interactives</h2>
      <p>Afficher, masquer, allumer ou éteindre 3 ampoules indépendamment.</p>
      <a href="exo-09_consignes.html">Voir la consigne</a>
    </div>
  </div>

  <h1>📄 Sommaire automatique du dossier</h1>
  <div class="section">
    <h2>Liste des pages disponibles :</h2>
    <ul>
      <?php
      $fichiers = scandir('.');
      $pages = array_filter($fichiers, function($fichier) {
        return is_file($fichier) && preg_match('/\.(html|php)$/', $fichier) && $fichier !== 'index.php';
      });
      sort($pages);
      foreach ($pages as $page) {
        $titre = pathinfo($page, PATHINFO_FILENAME);
        echo "<li><a href=\"$page\">$titre</a></li>";
      }
      ?>
    </ul>
  </div>

  <div class="footer">
    Généré dynamiquement avec PHP - Fusion ergonomique par Jérémie ✨
  </div>
</body>
</html>
