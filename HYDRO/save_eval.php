<?php
// save_eval.php

header('Content-Type: application/json');

// Lire le contenu brut
$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);

if (!isset($data['plongeur_id']) || !isset($data['evaluations'])) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Paramètres manquants"]);
    exit;
}

$plongeur_id = preg_replace('/[^0-9]/', '', $data['plongeur_id']);
$filename = __DIR__ . "/data/fiche_{$plongeur_id}.json";

if (!is_dir(__DIR__ . "/data")) {
    mkdir(__DIR__ . "/data", 0775, true);
}

file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo json_encode(["status" => "success", "message" => "Fiche enregistrée"]);
