
# Atelier Alwaysdata + GitHub Actions 🚀

Bienvenue dans cet atelier pratique qui vous guidera pas à pas pour créer votre environnement web complet avec Alwaysdata et GitHub Actions !

## Objectif général

Vous allez apprendre à :
- Créer votre hébergement de site
- Utiliser GitHub pour versionner et déployer votre projet
- Automatiser les déploiements avec GitHub Actions
- Exécuter plusieurs types d’applications sur Alwaysdata :
  - Une page HTML personnalisée
  - Une application PHP dans le dossier `/php/`
  - Une application Python dans le dossier `/python/`
  - Une application Node.js dans le dossier `/node/`
  - Et d’autres langages si vous le souhaitez (Ruby, Java...)

## Structure du repository

Votre repository est organisé par langages pour plus de clarté :

```
www/
├── index.html          # Page d'accueil du projet
├── sample.html         # Exemple de page HTML
├── php/
│   └── index.php       # Application PHP
├── node/
│   └── app.js          # Application Node.js
└── python/
    └── app.py          # Application Python
```

Chaque dossier est associé à une application personnalisée Alwaysdata.

---

## Étape 1 : Créer votre compte GitHub

1. Rendez-vous sur [https://github.com/](https://github.com/)
2. Créez un compte avec une adresse e-mail valide (évitez les e-mails temporaires).
3. Confirmez votre adresse e-mail.

> Tutoriel vidéo recommandé : [Créer un compte GitHub](https://docs.github.com/fr/get-started/onboarding/getting-started-with-your-github-account)

---

## Étape 2 : Forker le repository de base

1. Connectez-vous à votre compte GitHub.
2. Rendez-vous sur le repository suivant :  
   [https://github.com/jeremiepoujol/repo-alwaysdata.git](https://github.com/jeremiepoujol/repo-alwaysdata.git)
3. Cliquez sur le bouton **Fork** en haut à droite pour créer une copie de ce projet dans votre propre compte GitHub.

> Tutoriel vidéo recommandé : [Forker un projet sur GitHub](https://youtu.be/p33-7XQ29zQ)

---

## Étape 3 : Créer votre compte Alwaysdata

1. Rendez-vous sur [https://www.alwaysdata.com/fr/](https://www.alwaysdata.com/fr/)
2. Créez un compte gratuit.
3. Activez l'accès SSH :
   - Connectez-vous à l’interface d'administration Alwaysdata.
   - Allez dans **SSH (Accès distant)**.
   - Modifiez votre utilisateur et cochez **Activer la connexion par mot de passe**.

> Tutoriel vidéo recommandé : [Créer un compte Alwaysdata](https://youtu.be/6jJiqv_ZCHg)

---

## Étape 4 : Configurer l’automatisation avec GitHub Actions

1. Dans votre repository forké, allez dans **Settings > Secrets and variables > Actions**.
2. Créez deux secrets :
   - `alwaysdata_username` : votre identifiant Alwaysdata (login SSH).
   - `alwaysdata_password` : votre mot de passe SSH Alwaysdata.

> Tutoriel vidéo recommandé : [Créer des secrets GitHub](https://youtu.be/Rv5X5-qbvqA)

3. À chaque commit, GitHub exécutera automatiquement le script pour mettre à jour votre hébergement sur Alwaysdata.

---

## Étape 5 : Ajouter et configurer les applications

### 1. Application PHP

- Créez le fichier `/php/index.php`
- Sur Alwaysdata, ajoutez un nouveau site :
  - **Type de site :** PHP natif
  - **Répertoire racine :** `/home/UTILISATEUR/www/php/`
  - **Adresse du site :** `/php/`

### 2. Application Python

- Créez le fichier `/python/app.py`
- Sur Alwaysdata, ajoutez un nouveau site :
  - **Type de site :** Application personnalisée
  - **Commande :** `/usr/bin/python3 python/app.py`
  - **Répertoire de travail :** `/home/UTILISATEUR/www/`
  - **Adresse du site :** `/python/`
- N’oubliez pas de **redémarrer** l’application après chaque modification de fichier.

### 3. Application Node.js

- Créez le fichier `/node/app.js`
- Sur Alwaysdata, ajoutez un nouveau site :
  - **Type de site :** Application personnalisée
  - **Commande :** `/usr/bin/node node/app.js`
  - **Répertoire de travail :** `/home/UTILISATEUR/www/`
  - **Adresse du site :** `/node/`
- N’oubliez pas de **redémarrer** l’application après chaque modification de fichier.

---

## Navigation finale

Grâce à la page `index.html`, vous pourrez accéder facilement aux différentes démonstrations :

- 🌐 Exemple de page HTML
- 🐘 Exemple de page PHP
- 🚀 Exemple de page Python
- 🟢 Exemple de page Node.js
- 💎 Exemple de page Ruby (optionnel)
- ☕ Exemple de page Java (optionnel)

---

## Prolongements possibles

🎯 Vous pouvez aller plus loin :
- Tester Ruby ou Java dans leur propre dossier
- Installer des packages Python ou Node.js avec `pip install --user` ou `npm install`
- Ajouter des routes supplémentaires dans vos applications Python ou Node.js
- Explorer la personnalisation d’Alwaysdata (logs, SSL, variables d’environnement…)

---

## Support

Pour toute question, référez-vous au support d'Alwaysdata, à la documentation GitHub ou contactez votre formateur.

---

## Auteur

Jérémie Poujol
