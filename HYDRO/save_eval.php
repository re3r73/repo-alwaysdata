<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['plongeur_id']) || !isset($data['evaluations'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Données invalides']);
    exit;
}

$plongeurId = preg_replace('/[^0-9]/', '', $data['plongeur_id']);
$filename = __DIR__ . "/data/fiche_" . $plongeurId . ".json";

file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo json_encode(['success' => true]);
