<?php
// Vérifie que la requête est bien en POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['status' => 'error', 'message' => 'Méthode non autorisée']);
  exit;
}

// Lit le corps JSON de la requête
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Vérifie que l'ID du plongeur est présent
if (!isset($data['plongeur_id'])) {
  http_response_code(400);
  echo json_encode(['status' => 'error', 'message' => 'ID plongeur manquant']);
  exit;
}

$plongeur_id = preg_replace('/[^0-9]/', '', $data['plongeur_id']); // sécurité

$saveData = [];

// Si des évaluations de compétences sont présentes
if (isset($data['evaluations'])) {
  $saveData['evaluations'] = $data['evaluations'];
}

// Si des évaluations IPD sont présentes
if (isset($data['ipd'])) {
  $saveData['ipd'] = $data['ipd'];
}

// Crée le dossier data si besoin
if (!is_dir('data')) {
  mkdir('data', 0777, true);
}

// Écrit le fichier JSON avec indentation
$fichier = "data/fiche_" . $plongeur_id . ".json";
file_put_contents($fichier, json_encode($saveData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo json_encode(['status' => 'success']);
