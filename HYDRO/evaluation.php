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
    select.ipd-note { width: 50px; }
    .readonly-score { background-color: #eee; padding: 4px 8px; border-radius: 4px; }
  </style>
  <script>
    const criteresIPD = [
      { nom: "Interprétation du signe et comportement adapté", poids: 2 },
      { nom: "Vitesse de réaction", poids: 4 },
      { nom: "Communication décollage", poids: 2 },
      { nom: "Prise sécurisante", poids: 2 },
      { nom: "Décollage tonique", poids: 2 },
      { nom: "Rectitude & vitesse de remontée", poids: 4 },
      { nom: "Ralentissement marqué à 5m", poids: 1 },
      { nom: "Stop franc entre 5m et 3m", poids: 1 },
      { nom: "Tour d'horizon", poids: 1 },
      { nom: "Regard & présence lors de la remontée", poids: 1 }
    ];

    function genererTableauIPD(nom) {
      const div = document.getElementById("contenuTableau");
      const bloc = document.createElement("div");
      let html = `<h3>${nom}</h3><table><tr><th>Critère</th><th>Note</th></tr>`;
      criteresIPD.forEach((c, idx) => {
        html += `<tr><td>${c.nom} (/${c.poids})</td><td><select class='ipd-note' data-poids='${c.poids}' data-ipd='${nom}' onchange='majTotalIPD("${nom}")'>`;
        for (let i = 0; i <= c.poids; i++) {
          html += `<option value='${i}'>${i}</option>`;
        }
        html += `</select></td></tr>`;
      });
      html += `<tr><td><strong>Total sur 20</strong></td><td><span class='readonly-score' id='total_${nom}'>0</span></td></tr></table>`;
      bloc.innerHTML = html;
      div.appendChild(bloc);
    }

    function majTotalIPD(nom) {
      const notes = document.querySelectorAll(`select.ipd-note[data-ipd='${nom}']`);
      let total = 0;
      notes.forEach(s => total += parseInt(s.value));
      document.getElementById(`total_${nom}`).innerText = total;
    }

    function genererEtCharger() {
      const select = document.getElementById("studentSelect");
      if (select.value) {
        document.getElementById("contenuTableau").innerHTML = "";
        genererTableauIPD("IPD1");
        genererTableauIPD("IPD2");
      }
    }

    // Sauvegarde automatique toutes les 30 secondes
    setInterval(() => {
      const select = document.getElementById("studentSelect");
      if (!select || !select.value) return;
      const plongeurId = select.value;
      const evaluations = {};

      ["IPD1", "IPD2"].forEach(ipd => {
        const notes = document.querySelectorAll(`select.ipd-note[data-ipd='${ipd}']`);
        evaluations[ipd] = [];
        notes.forEach((note, i) => {
          evaluations[ipd].push({ critere: criteresIPD[i].nom, note: parseInt(note.value) });
        });
      });

      fetch('save_eval.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ plongeur_id: plongeurId, ipd: evaluations })
      });
    }, 30000);
  </script>
</head>
<body>

<select id="studentSelect" onchange="genererEtCharger()">
  <option value="">-- Choisir un élève --</option>
  <option value="1">AINS Mathieu</option>
  <option value="2">BARTHELEMY Carole</option>
  <option value="3">BRAOUDE Dominique</option>
  <option value="4">DE VITI Gaétan</option>
  <option value="5">EHRHARD Virginie</option>
  <option value="6">EISNITZ Anne-Laure</option>
  <option value="7">LEPARMENTIER Damien</option>
  <option value="8">MORGAND Claire</option>
  <option value="9">OPIN Maxime</option>
  <option value="10">OURSEL Oxana</option>
  <option value="11">PINHEIRO Tony</option>
  <option value="12">RONDET Célian</option>
</select>

<h2>Évaluation Niveau 2 - FFESSM</h2>
<div id="contenuTableau"></div>

</body>
</html>
