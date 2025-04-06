# Atelier Alwaysdata + GitHub Actions 🚀

## Installation de votre environnement de travail

### Objectif général
Cet atelier a pour objectif de vous apprendre à mettre en place votre environnement de travail dans le cadre du module **NFA040**.

Vous allez :
- Créer votre hébergement de site
- Découvrir les Actions et les Secrets GitHub
- Automatiser le déploiement de votre site via GitHub Actions
- Et même faire tourner une application Python sur Alwaysdata 🎉

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

