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
    .modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.6); justify-content: center; align-items: center; }
    .modal-content { background: white; padding: 20px; border-radius: 8px; width: 600px; max-height: 90%; overflow-y: auto; }
    .modal h3 { margin-top: 0; }
    .btn-ipd { cursor: pointer; color: blue; text-decoration: underline; font-size: 0.9em; }
  </style>
<script>
function ouvrirModalIPD(nomIPD) {
  const criteres = [
    { nom: "Interprétation du signe et comportement adapté", poids: 2 },
    { nom: "Vitesse de réaction", poids: 4 },
    { nom: "Communication décollage", poids: 2 },
    { nom: "Prise sécurisante", poids: 2 },
    { nom: "Rectitude & vitesse de remontée", poids: 4 },
    { nom: "Décollage tonique", poids: 2 },
    { nom: "Stop franc entre 5m et 3m", poids: 1 },
    { nom: "Tour d'horizon", poids: 1 },
    { nom: "Regard & présence lors de la remontée", poids: 1 },
    { nom: "Ralentissement marqué à 5m", poids: 1 },
  ];

  let html = `<h3>Détail de l’évaluation : ${nomIPD}</h3><form id='form_${nomIPD}'>`;
  criteres.forEach((crit, idx) => {
    html += `<label>${crit.nom} (sur ${crit.poids} pts)</label><br>`;
    html += `<input type='number' name='crit_${idx}' min='0' max='${crit.poids}' required><br><br>`;
  });
  html += `<button type='submit'>✅ Valider</button>`;
  html += `</form>`;

  const modal = document.getElementById("modalIPD");
  modal.querySelector(".modal-content").innerHTML = html;
  modal.style.display = "flex";

  document.getElementById(`form_${nomIPD}`).onsubmit = (e) => {
    e.preventDefault();
    const inputs = e.target.querySelectorAll("input");
    let total = 0;
    inputs.forEach((input, i) => {
      total += parseFloat(input.value || 0);
    });
    alert(`Total IPD évalué : ${total}/20`);
    modal.style.display = "none";
  };
}

window.onclick = function(event) {
  const modal = document.getElementById("modalIPD");
  if (event.target === modal) modal.style.display = "none";
};
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

<!-- Exemple de bouton IPD dans un tableau -->
<p><span class="btn-ipd" onclick="ouvrirModalIPD('IPD1')">⚙️ Évaluer IPD1</span></p>
<p><span class="btn-ipd" onclick="ouvrirModalIPD('IPD2')">⚙️ Évaluer IPD2</span></p>

<div id="modalIPD" class="modal">
  <div class="modal-content"></div>
</div>

</body>
</html>
