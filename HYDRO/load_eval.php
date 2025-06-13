<?php
header('Content-Type: application/json');

$eleve = isset($_GET['eleve']) ? preg_replace('/[^a-zA-Z0-9_-]/', '_', $_GET['eleve']) : null;
if (!$eleve) {
    http_response_code(400);
    echo json_encode(["error" => "Nom élève manquant."]);
    exit;
}

$filename = "evaluations_ipd/$eleve.json";
if (file_exists($filename)) {
    $json = file_get_contents($filename);
    echo $json;
} else {
    echo json_encode([]);
}
