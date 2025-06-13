<?php
$eleveId = $_GET['eleve'] ?? null;
$dataFile = "data/fiche_{$eleveId}.json";
header("Content-Type: application/json");
if (file_exists($dataFile)) {
  echo file_get_contents($dataFile);
} else {
  echo json_encode(["message" => "Aucune donnée pour cet élève"]);
}
?>
