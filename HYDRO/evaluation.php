<?php
$eleveId = $_GET['eleve'] ?? null;
$dataDir = __DIR__ . '/data';
$dataFile = $dataDir . "/fiche_{$eleveId}.json";

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if ($eleveId && file_exists($dataFile)) {
    echo file_get_contents($dataFile);
  } else {
    echo json_encode(["message" => "Aucune donnée pour cet élève"]);
  }

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Création du dossier si besoin
  if (!is_dir($dataDir)) {
    mkdir($dataDir, 0775, true);
  }

  $json = file_get_contents("php://input");
  if ($eleveId && $json) {
    file_put_contents($dataFile, $json);
    echo json_encode(["message" => "Données sauvegardées"]);
  } else {
    echo json_encode(["error" => "Échec de la sauvegarde"]);
  }

} else {
  echo json_encode(["error" => "Méthode non supportée"]);
}
?>
