<?php
$data = json_decode(file_get_contents('php://input'), true);
$id = isset($data['id']) ? preg_replace('/[^a-zA-Z0-9_-]/', '', $data['id']) : 'unknown';
file_put_contents(__DIR__ . "/data/eleve_" . $id . ".json", json_encode($data, JSON_PRETTY_PRINT));
echo json_encode(["status" => "ok", "message" => "Fiche enregistrée"]);
?>