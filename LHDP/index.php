<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Liste des cours N3 – Saison 2024/2025</title>
  <style>
    body {
      background-color: #f0f4f8;
      font-family: Arial, sans-serif;
      padding: 40px;
    }
    h1 {
      color: #004a6d;
    }
    ul {
      list-style-type: none;
      padding-left: 0;
    }
    li {
      margin: 10px 0;
    }
    a {
      text-decoration: none;
      color: #005b99;
    }
    a:hover {
      color: #003f6f;
    }
  </style>
</head>
<body>
  <h1>📘 Cours N3 – Saison 2024/2025</h1>
  <ul>
    <?php
      $files = glob("*.pdf");
      if (empty($files)) {
          echo "<li>Aucun fichier PDF trouvé.</li>";
      } else {
          foreach ($files as $file) {
              $name = basename($file);
              echo "<li><a href=\"$name\" target=\"_blank\">$name</a></li>";
          }
      }
    ?>
  </ul>
</body>
</html>
