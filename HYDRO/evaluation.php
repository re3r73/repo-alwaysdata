<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Évaluation FFESSM - Niveau 2</title>
  <style>
    body { font-family: Arial, sans-serif; }
    table { border-collapse: collapse; width: 100%; margin-bottom: 20px; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
    th { background-color: #f0f0f0; }
    td.state-A { background-color: #b6f1c2; }
    td.state-ECA { background-color: #f9b5b5; }
    td.state-NT { background-color: #ddd; }
    td.label-left { text-align: left; font-weight: bold; color: #004466; background: #e0e0e0; }
    .pe40-header { background-color: #0F4166; color: white; font-weight: bold; text-align: left; padding-left: 10px; }
    .commune-header { background-color: #546B8D; color: white; font-weight: bold; text-align: left; padding-left: 10px; }
    .pa20-header { background-color: #B1B8CB; color: black; font-weight: bold; text-align: left; padding-left: 10px; }
    button { padding: 10px 20px; font-size: 16px; }
  </style>
</head>
<body>

<h2>Évaluation Niveau 2 - FFESSM</h2>

<table id="evaluationTable">
  <thead>
    <tr>
      <th>Compétences</th>
      <th>Plongée 1<br><select class="eval-selector" data-session="P1"></select></th>
      <th>Plongée 2<br><select class="eval-selector" data-session="P2"></select></th>
      <th>Plongée 3<br><select class="eval-selector" data-session="P3"></select></th>
      <th>Plongée 4<br><select class="eval-selector" data-session="P4"></select></th>
      <th>Plongée 5<br><select class="eval-selector" data-session="P5"></select></th>
      <th>Plongée 6<br><select class="eval-selector" data-session="P6"></select></th>
      <th>Plongée 7<br><select class="eval-selector" data-session="P7"></select></th>
    </tr>
  </thead>
  <tbody>
    <!-- PE40 Header -->
    <tr><td class="pe40-header" colspan="8">Compétences spécifiques — PE40</td></tr>
    <tr data-id="1"><td class="label-left">Ventiler et gestion de la consommation</td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td></tr>
    <tr data-id="2"><td class="label-left">Se propulser et s'équilibrer</td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td></tr>
    <tr data-id="3"><td class="label-left">Communiquer avec le GP</td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td></tr>
    <tr data-id="4"><td class="label-left">Retourner en surface</td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td></tr>
    <tr data-id="5"><td class="label-left">Intervenir en relai sur un équipier</td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td></tr>
    <tr data-id="6"><td class="label-left">Respect durée et profondeur</td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td></tr>

    <!-- Communes Header -->
    <tr><td class="commune-header" colspan="8">Compétences communes</td></tr>
    <tr data-id="7"><td class="label-left">S’équiper et se mettre à l’eau</td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td></tr>
    <tr data-id="8"><td class="label-left">S’immerger et se propulser</td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td></tr>
    <tr data-id="9"><td class="label-left">Respecter le milieu et l’environnement</td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td></tr>
    <tr data-id="10"><td class="label-left">Vidage de masque</td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td></tr>

    <!-- PA20 Header -->
    <tr><td class="pa20-header" colspan="8">Compétences spécifiques — PA20</td></tr>
    <tr data-id="11"><td class="label-left">Parachute</td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td></tr>
    <tr data-id="12"><td class="label-left">Planifier la plongée</td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td></tr>
    <tr data-id="13"><td class="label-left">Être attentif au matériel des équipiers</td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td></tr>
    <tr data-id="14"><td class="label-left">Évoluer en autonomie</td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td></tr>
    <tr data-id="15"><td class="label-left">Intervenir et porter assistance (IPD 1)</td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td></tr>
    <tr data-id="16"><td class="label-left">Intervenir et porter assistance (IPD 2)</td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td><td onclick="toggleState(this)"></td></tr>
  </tbody>
</table>

<button onclick="envoyerEvaluation()">Enregistrer</button>

<script>
  const states = ["", "A", "ECA", "NT"];
  const evaluateurs = [
    "", 
    "POUJOL Jérémie (E3)", 
    "VELLUET Philippe (E3)", 
    "COATMEUR Cyrille (E3)", 
    "BEURY Didier (E2)", 
    "BONNET Jean-Philippe (E2)", 
    "BRILL Nicolas (E2)", 
    "GARNIER Laurent (E2)", 
    "MERCIER-GALLAY Jacques (E2)", 
    "MERLE Arthur (E2)"
  ];

  function toggleState(cell) {
    let current = cell.getAttribute("data-state") || "";
    let nextIndex = (states.indexOf(current) + 1) % states.length;
    let nextState = states[nextIndex];

    cell.classList.remove("state-A", "state-ECA", "state-NT");
    cell.removeAttribute("data-state");
    cell.textContent = "";

    if (nextState) {
      cell.classList.add("state-" + nextState);
      cell.setAttribute("data-state", nextState);
      cell.textContent = nextState;
    }
  }

  function initEvaluateurs() {
    document.querySelectorAll('.eval-selector').forEach(select => {
      evaluateurs.forEach(ev => {
        const option = document.createElement("option");
        option.value = ev;
        option.textContent = ev || "-- Choisir --";
        select.appendChild(option);
      });
    });
  }

  function envoyerEvaluation() {
    const plongeurId = 1;
    const evaluations = [];
    const table = document.getElementById("evaluationTable");
    const headers = table.rows[0].cells;
    const evaluateurParSession = {};

    document.querySelectorAll('.eval-selector').forEach(select => {
      const session = select.getAttribute("data-session");
      evaluateurParSession[session] = select.value;
    });

    for (let r = 1; r < table.rows.length; r++) {
      const row = table.rows[r];
      const competenceId = row.getAttribute("data-id");
      if (!competenceId) continue;
      for (let c = 1; c <= 7; c++) {
        const cell = row.cells[c];
        if (cell && cell.hasAttribute("onclick")) {
          const session = "P" + c;
          const state = cell.getAttribute("data-state") || "";
          const evaluateur = evaluateurParSession[session] || "";
          evaluations.push({
            competence_id: competenceId,
            session: session,
            etat: state,
            evaluateur: evaluateur
          });
        }
      }
    }

    fetch('save_eval.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        plongeur_id: plongeurId,
        evaluations: evaluations
      })
    })
    .then(response => response.json())
    .then(data => alert("Évaluation enregistrée avec succès."))
    .catch(error => alert("Erreur lors de l'enregistrement."));
  }

  window.onload = initEvaluateurs;
</script>

</body>
</html>
