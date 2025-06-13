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
    td.state-A { background-color: #b6f1c2; }       /* Vert clair */
    td.state-ECA { background-color: #f9b5b5; }     /* Rouge pâle */
    td.state-NT { background-color: #ddd; }         /* Gris clair */
    .evaluator-row td { text-align: left; background: #f9f9f9; }
    button { padding: 10px 20px; font-size: 16px; }
  </style>
</head>
<body>

<h2>Évaluation Niveau 2 - FFESSM</h2>

<table id="evaluationTable">
  <thead>
    <tr>
      <th>Compétence</th>
      <th>J1-PM</th>
      <th>J2-AM</th>
      <th>J2-PM</th>
      <th>J3-AM</th>
      <th>J3-PM</th>
    </tr>
  </thead>
  <tbody>
    <tr data-id="1">
      <td>Communiquer avec le GP</td>
      <td onclick="toggleState(this)"></td>
      <td onclick="toggleState(this)"></td>
      <td onclick="toggleState(this)"></td>
      <td onclick="toggleState(this)"></td>
      <td onclick="toggleState(this)"></td>
    </tr>
    <tr data-id="2">
      <td>Ventiler et s'équilibrer</td>
      <td onclick="toggleState(this)"></td>
      <td onclick="toggleState(this)"></td>
      <td onclick="toggleState(this)"></td>
      <td onclick="toggleState(this)"></td>
      <td onclick="toggleState(this)"></td>
    </tr>
    <tr data-id="3">
      <td>Vidage de masque</td>
      <td onclick="toggleState(this)"></td>
      <td onclick="toggleState(this)"></td>
      <td onclick="toggleState(this)"></td>
      <td onclick="toggleState(this)"></td>
      <td onclick="toggleState(this)"></td>
    </tr>
    <tr data-id="4">
      <td>Respect des consignes du DP</td>
      <td onclick="toggleState(this)"></td>
      <td onclick="toggleState(this)"></td>
      <td onclick="toggleState(this)"></td>
      <td onclick="toggleState(this)"></td>
      <td onclick="toggleState(this)"></td>
    </tr>
    <tr data-id="5">
      <td>IPD1</td>
      <td onclick="toggleState(this)"></td>
      <td colspan="4"></td>
    </tr>
    <tr data-id="6">
      <td>IPD2</td>
      <td onclick="toggleState(this)"></td>
      <td colspan="4"></td>
    </tr>
    <tr data-id="7">
      <td>IPD3</td>
      <td onclick="toggleState(this)"></td>
      <td colspan="4"></td>
    </tr>
    <tr data-id="8">
      <td>IPD4</td>
      <td onclick="toggleState(this)"></td>
      <td colspan="4"></td>
    </tr>
    <tr class="evaluator-row">
      <td colspan="6">
        <label for="evaluatorSelect"><strong>Évaluateur :</strong></label>
        <select id="evaluatorSelect">
          <option value="">-- Choisir --</option>
          <option value="Jean Dupont">Jean Dupont</option>
          <option value="Claire Martin">Claire Martin</option>
          <option value="Sophie Lemoine">Sophie Lemoine</option>
        </select>
      </td>
    </tr>
  </tbody>
</table>

<button onclick="envoyerEvaluation()">Enregistrer</button>

<script>
  const states = ["", "A", "ECA", "NT"];

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

  function envoyerEvaluation() {
    const plongeurId = 1; // exemple statique
    const evaluations = [];
    const table = document.getElementById("evaluationTable");
    const evaluator = document.getElementById("evaluatorSelect").value;

    for (let r = 1; r < table.rows.length - 1; r++) {
      const row = table.rows[r];
      const competenceId = row.getAttribute("data-id");
      for (let c = 1; c < row.cells.length; c++) {
        const cell = row.cells[c];
        if (cell.hasAttribute("onclick")) {
          const session = table.rows[0].cells[c].innerText.trim();
          const state = cell.getAttribute("data-state") || "";
          evaluations.push({
            competence_id: competenceId,
            session: session,
            etat: state
          });
        }
      }
    }

    fetch('save_eval.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        plongeur_id: plongeurId,
        evaluations: evaluations,
        evaluateur: evaluator
      })
    })
    .then(response => response.json())
    .then(data => alert("Évaluation enregistrée avec succès."))
    .catch(error => alert("Erreur lors de l'enregistrement."));
  }
</script>

</body>
</html>
