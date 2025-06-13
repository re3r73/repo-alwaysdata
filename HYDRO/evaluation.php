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
    #studentSelect { font-size: 16px; margin-bottom: 20px; }
  </style>
</head>
<body>

<h2>Évaluation Niveau 2 - FFESSM</h2>

$1
<button onclick="chargerFiche()">📄 Consulter la fiche enregistrée</button>

<!-- Le tableau ne s'affiche pas encore ici -->
<div id="contenuTableau"></div>

$1

  function chargerFiche() {
    const studentSelect = document.getElementById("studentSelect");
    const plongeurId = studentSelect.value;
    if (!plongeurId) {
      alert("Veuillez d'abord sélectionner un élève.");
      return;
    }
    const fichier = `data/fiche_${plongeurId}.json`;

    fetch(fichier)
      .then(resp => {
        if (!resp.ok) throw new Error("Fiche non trouvée");
        return resp.json();
      })
      .then(data => {
        alert("Fiche trouvée et chargée. (affichage à implémenter)");
        remplirDepuisJSON(data);
      })
      .catch(err => alert("Aucune fiche enregistrée pour cet élève."));
  }

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
    const studentSelect = document.getElementById("studentSelect");
    const plongeurId = studentSelect.value;
    if (!plongeurId) {
      alert("Veuillez sélectionner un élève.");
      return;
    }

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

  function remplirDepuisJSON(data) {
  const table = document.getElementById("evaluationTable");
  if (!table) return;
  data.evaluations.forEach(evalItem => {
    const { competence_id, session, etat, evaluateur } = evalItem;
    const row = table.querySelector(`[data-id='${competence_id}']`);
    if (!row) return;
    const colNum = parseInt(session.replace("P", ""));
    const cell = row.cells[colNum];
    if (cell) {
      cell.classList.remove("state-A", "state-ECA", "state-NT");
      cell.classList.add("state-" + etat);
      cell.setAttribute("data-state", etat);
      cell.textContent = etat;
    }
  });
  // remplissage des évaluateurs
  Object.entries(data.evaluations.reduce((acc, curr) => {
    acc[curr.session] = curr.evaluateur;
    return acc;
  }, {})).forEach(([session, ev]) => {
    const selector = document.querySelector(`select.eval-selector[data-session='${session}']`);
    if (selector) selector.value = ev;
  });
}

$1
</script>

</body>
</html>
