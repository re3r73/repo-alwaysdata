<?php
$input = json_decode(file_get_contents("php://input"), true);
$eleveId = $input['eleve_id'] ?? null;
if (!$eleveId) {
  http_response_code(400);
  echo json_encode(["error" => "ID élève manquant"]);
  exit;
}

$dataFile = __DIR__ . "/data/fiche_{$eleveId}.json";
$existing = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

if (!isset($existing['ipd'])) {
  $existing['ipd'] = [];
}
$ref = $input['ipd']['ref'];
$existing['ipd'][$ref] = $input['ipd'];

file_put_contents($dataFile, json_encode($existing, JSON_PRETTY_PRINT));
echo json_encode(["success" => true]);
?>
