
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

## Prérequis

- Avoir un compte GitHub
- Avoir un compte Alwaysdata
- Avoir forké ce repository sur votre propre GitHub

## Étapes clés de l’atelier

### 1. GitHub

✅ Créez votre compte GitHub  
✅ Forkez ce repository

> Postez l’URL de votre repository dans la discussion publique.

---

### 2. Alwaysdata

✅ Créez votre compte Alwaysdata  
✅ Activez l’accès SSH

> Postez l’URL de votre site principal dans la discussion publique.

---

### 3. Automatisation du déploiement

✅ Créez vos **secrets GitHub** (`alwaysdata_username` et `alwaysdata_password`)  
✅ GitHub Actions mettra à jour automatiquement votre hébergement à chaque push.

---

### 4. Application PHP

✅ Placez votre fichier dans `/php/index.php`  
✅ Configurez Alwaysdata :

- **Type de site :** PHP natif
- **Répertoire racine :** `/home/UTILISATEUR/www/php/`
- **Adresse du site :** `/php/`

✅ Accédez à votre application PHP à l’adresse publique correspondante.

> Postez l’URL publique de votre application PHP dans la discussion.

---

### 5. Application Python

✅ Placez votre fichier dans `/python/app.py`  
✅ Configurez Alwaysdata :

- **Commande :** `/usr/bin/python3 python/app.py`
- **Répertoire de travail :** `/home/UTILISATEUR/www/`
- **Adresse du site :** `/python/`

✅ Redémarrez le site Python après déploiement.

> Postez l’URL publique de votre application Python dans la discussion.

---

### 6. Application Node.js

✅ Placez votre fichier dans `/node/app.js`  
✅ Configurez Alwaysdata :

- **Commande :** `/usr/bin/node node/app.js`
- **Répertoire de travail :** `/home/UTILISATEUR/www/`
- **Adresse du site :** `/node/`

✅ Redémarrez le site Node.js après déploiement.

> Postez l’URL publique de votre application Node.js dans la discussion.

---

## Navigation finale

Vous pourrez accéder aux différentes démos via la page d’accueil :

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

---

## Support

Pour toute question, n’hésitez pas à utiliser le canal de discussion publique de l’atelier. Bon courage et amusez-vous bien ! 🎉

---

## Auteur

Jérémie Poujol
