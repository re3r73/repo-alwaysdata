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
    .back {
      margin-top: 40px;
      display: inline-block;
      text-decoration: none;
      color: #007B8A;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h1>📚 Cours N3 – Saison 2024/2025</h1>
  <ul>
    <?php
      $extensions = ['pdf', 'pptx', 'ppt'];
      $ignored = ['logo_hydronautes.jpg', 'index.php'];
      $files = [];

      foreach ($extensions as $ext) {
          foreach (glob("*.$ext") as $file) {
              if (!in_array($file, $ignored)) {
                  $files[] = $file;
              }
          }
      }

      sort($files);

      if (empty($files)) {
          echo "<li>Aucun fichier trouvé.</li>";
      } else {
          foreach ($files as $file) {
              $icon = '📄';
              if (preg_match('/\.pptx?$/i', $file)) {
                  $icon = '📊';
              }
              echo "<li>$icon <a href=\"$file\" target=\"_blank\">$file</a></li>";
          }
      }
    ?>
  </ul>

  <a class="back" href="/">← Retour à la page d’accueil</a>
</body>
</html>
