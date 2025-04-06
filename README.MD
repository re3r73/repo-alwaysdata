
# Atelier Alwaysdata + GitHub Actions 🚀

## Installation de votre environnement de travail

### Objectif général
Cet atelier a pour objectif de vous apprendre à mettre en place votre environnement de travail dans le cadre du module **NFA040**.

Vous allez :
- Créer votre hébergement de site
- Découvrir les Actions et les Secrets GitHub
- Automatiser le déploiement de votre site via GitHub Actions
- Et même faire tourner une application Python sur Alwaysdata 🎉
- Bonus : Faire tourner une application Node.js 🚀

Large programme, mais tout à fait accessible ! Pas besoin de prérequis techniques, il suffit d’un peu d’observation et de rigueur.

---

## Séquence 1 : GitHub

**Objectif :** Création d'un Repository GitHub pour héberger et déployer votre projet  
**Difficulté :** Très facile (~10 minutes)

GitHub est une plateforme collaborative pour stocker et gérer son code source.  
Chaque **repository** correspond à un projet unique.

### Procédure :
1. Créez votre compte GitHub : [Créer un compte GitHub](https://github.com/)
   - Tutoriel vidéo : [Créer un compte GitHub](https://docs.github.com/fr/get-started/onboarding/getting-started-with-your-github-account)
   - ⚠️ Utilisez une adresse e-mail valide, pas de mail temporaire.

2. Forkez ce repository : [https://github.com/jeremiepoujol/repo-alwaysdata.git](https://github.com/jeremiepoujol/repo-alwaysdata.git)
   - Tutoriel vidéo : [Forker ce projet](https://youtu.be/p33-7XQ29zQ)

### Travail demandé :
✅ Créez votre compte GitHub, forkez ce projet et **postez l’URL de votre repository dans la discussion publique**.

### Notions acquises :
- Création de repository GitHub
- Fork d'un projet existant pour l'adapter à ses besoins

---

## Séquence 2 : Créer un hébergement en ligne

**Objectif :** Créer un hébergement Alwaysdata pour publier votre site  
**Difficulté :** Facile (~10 minutes)

### Procédure :
1. Créez votre compte sur Alwaysdata : [https://www.alwaysdata.com/fr/](https://www.alwaysdata.com/fr/)
   - Tutoriel vidéo : [Créer un compte Alwaysdata](https://youtu.be/6jJiqv_ZCHg)

2. Activez l’accès SSH depuis la console Alwaysdata :
   - Rendez-vous dans **SSH (Accès distant)**
   - Modifiez les paramètres de votre utilisateur
   - Cochez **Activer la connexion par mot de passe**

### Travail demandé :
✅ Créez votre hébergement et **postez l’URL de votre site dans la discussion publique**.

### Notions acquises :
- Découverte d’Alwaysdata, hébergement gratuit et flexible
- Activation d’outils avancés comme SSH

---

## Séquence 3 : Automatiser avec GitHub Actions (CI/CD)

**Objectif :** Automatiser la mise à jour de votre site avec GitHub Actions  
**Difficulté :** Moyenne (~15 minutes)

Grâce au fichier **CICD.yml** dans `.github/workflows/`, chaque modification de votre repository sera automatiquement déployée sur votre hébergement Alwaysdata.

### Étapes :

1. Créez **2 secrets GitHub** dans votre repository :
   - `alwaydata_username` : votre login SSH Alwaysdata
   - `alwaydata_password` : votre mot de passe SSH Alwaysdata

   Tutoriel vidéo : [Créer des secrets GitHub](https://youtu.be/Rv5X5-qbvqA)

2. À chaque commit, GitHub exécutera automatiquement le script pour mettre à jour votre hébergement.

### Travail demandé :
✅ Configurez vos secrets GitHub pour permettre l’automatisation des déploiements.

### Notions acquises :
- Utilisation des GitHub Actions pour l’automatisation
- Sécurisation des identifiants grâce aux Secrets GitHub

---

## Séquence 4 : Personnalisez votre page d’accueil

**Objectif :** Modifier votre page d’accueil HTML  
**Difficulté :** Facile (~10 minutes)

Modifiez votre fichier `index.html` dans votre repository.

Remplacez la ligne du titre par :

```html
<h1>Ceci est mon Site Internet by Jérémie</h1>
```

### Travail demandé :
✅ Modifiez votre page d’accueil et **postez l’URL de votre site personnalisé dans la discussion publique**.

### Notions acquises :
- Modification d’un fichier HTML
- Personnalisation de la page d’accueil

---

## Séquence 5 : Exécuter une application Python sur Alwaysdata

**Objectif :** Faire tourner un script Python sur votre hébergement Alwaysdata  
**Difficulté :** Moyenne (~15 minutes)

Alwaysdata permet d’exécuter des applications Python facilement sur votre hébergement.

### Étapes :

1. **Créez un fichier Python dans votre repository**, par exemple `app.py` avec le contenu suivant :

```python
print("Content-Type: text/html\n")
print("<h1>Hello depuis Alwaysdata 🚀</h1>")
```

2. **Configurez Alwaysdata pour exécuter votre application Python :**
   - Connectez-vous à votre interface Alwaysdata
   - Allez dans **Sites > Ajouter un site**
   - Choisissez **Application personnalisée**
   - Remplissez les champs :
     - **Chemin** : `/www/app.py`
     - **Commande** : `/usr/bin/python3 %(path)s`
     - **Type** : "Application personnalisée (Python)"
   - Enregistrez

3. (Optionnel) Vérifiez les **logs** dans la section **Journaux > Sites** pour déboguer.

### Travail demandé :
✅ Créez votre fichier Python, configurez Alwaysdata pour exécuter votre script, et **postez l’URL publique de votre application dans la discussion**.

### Notions acquises :
- Exécution d’une application Python sur un serveur web
- Paramétrage d’application personnalisée sur Alwaysdata
- Lecture des logs pour le débogage

---

## Séquence 6 : Exécuter une application Node.js sur Alwaysdata

**Objectif :** Faire tourner un serveur Node.js sur votre hébergement Alwaysdata  
**Difficulté :** Moyenne (~15 minutes)

Alwaysdata permet d’exécuter des applications Node.js facilement sur votre hébergement.

### Étapes :

1. **Créez un fichier `app.js` dans le dossier `node/` dans votre repository** avec le contenu suivant :

```javascript
const http = require('http');

const hostname = '::'; // Obligatoire pour Alwaysdata
const port = process.env.PORT; // Alwaysdata injecte le port automatiquement

const server = http.createServer((req, res) => {
  res.writeHead(200, { 'Content-Type': 'text/html' });
  res.end('<h1>Hello depuis Alwaysdata avec Node.js 🟢</h1>');
});

server.listen(port, hostname, () => {
  console.log(`🚀 Server running at http://[${hostname}]:${port}/`);
});
```

2. **Configurez Alwaysdata pour exécuter votre application Node.js :**
   - Connectez-vous à votre interface Alwaysdata
   - Allez dans **Sites > Ajouter un site**
   - Choisissez **Application personnalisée**
   - Remplissez les champs :
     - **Commande** : `/usr/bin/node node/app.js`
     - **Répertoire de travail** : `/home/jeremiepoujol/www/`
     - **Adresse du site** : `/node`
   - Enregistrez

3. **Redémarrez manuellement votre application Node.js** via l'interface Alwaysdata après avoir déployé ou mis à jour votre code.

4. Vérifiez les **logs** dans la section **Journaux > Sites** pour voir le message de démarrage ou corriger d’éventuelles erreurs.

### Travail demandé :
✅ Créez votre fichier Node.js, configurez Alwaysdata, redémarrez l’application, et **postez l’URL publique de votre application dans la discussion**.

### Notions acquises :
- Exécution d’une application Node.js sur un serveur web
- Utilisation d'Alwaysdata pour des applications dynamiques
- Importance du redémarrage manuel après déploiement
- Lecture des logs pour le débogage

---
