<?php
// Connexion à la base de données AlwaysData
$host = 'mysql-jeremiepoujol.alwaysdata.net';
$dbname = 'jeremiepoujol_evaluationffessm';
$user = '404366';
$pass = '$wC0H2^XG45S'; // Remplace par ton vrai mot de passe
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Exemple de requête avec jointure
    $stmt = $pdo->query("SELECT 
        p.plongeur_nom, 
        p.numero_plongee, 
        p.date_evaluation,
        p.niveau_cible,
        p.ipd1_ref,
        i.total_note AS ipd1_total,
        i.ipd_non_travaillee,
        i.elim_intervention,
        i.penalite
     FROM evaluations_plongee p
     LEFT JOIN evaluations_ipd i ON p.ipd1_ref = i.reference_cellule
     ORDER BY p.date_evaluation DESC");

    $resultats = $stmt->fetchAll();

    echo "<h2>Résultats des évaluations IPD</h2>";
    echo "<table border='1' cellpadding='6'><tr>
        <th>Nom</th><th>Plongée #</th><th>Date</th><th>Niveau</th>
        <th>Ref IPD1</th><th>Note IPD1</th><th>NT</th><th>Elim</th><th>Pénalité</th>
    </tr>";

    foreach ($resultats as $row) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['plongeur_nom']) . "</td>";
        echo "<td>" . $row['numero_plongee'] . "</td>";
        echo "<td>" . $row['date_evaluation'] . "</td>";
        echo "<td>" . $row['niveau_cible'] . "</td>";
        echo "<td>" . $row['ipd1_ref'] . "</td>";
        echo "<td>" . ($row['ipd1_total'] !== null ? $row['ipd1_total'] : '-') . "</td>";
        echo "<td>" . ($row['ipd_non_travaillee'] ? 'Oui' : 'Non') . "</td>";
        echo "<td>" . ($row['elim_intervention'] ? 'Oui' : 'Non') . "</td>";
        echo "<td>" . $row['penalite'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

} catch (PDOException $e) {
    echo "<p>Erreur de connexion : " . $e->getMessage() . "</p>";
    exit;
}
?>
