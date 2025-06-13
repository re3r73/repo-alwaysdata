<?php

$dir = __DIR__ . '/evaluations_ipd';
if (!is_dir($dir)) mkdir($dir, 0775, true);

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['eleve']) || !isset($data['ref']) || !isset($data['scores'])) {
    http_response_code(400);
    echo json_encode(["error" => "Données manquantes."]);
    exit;
}

$eleve = preg_replace('/[^a-zA-Z0-9_-]/', '_', $data['eleve']); // Nom sécurisé
$ref = preg_replace('/[^a-zA-Z0-9_-]/', '_', $data['ref']);
$filename = "evaluations_ipd/$eleve.json";

$existing = [];
if (file_exists($filename)) {
    $json = file_get_contents($filename);
    $existing = json_decode($json, true) ?? [];
}

$existing[$ref] = [
    "scores" => $data['scores'],
    "elim" => $data['elim'],
    "notWorked" => $data['notWorked'],
    "total" => $data['total']
];

file_put_contents($filename, json_encode($existing, JSON_PRETTY_PRINT));
echo json_encode(["success" => true]);
