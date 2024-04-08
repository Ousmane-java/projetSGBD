# Gestion de l'effectivité des enseignements

## Description

Le projet vise à numériser les procédures de gestion pédagogique de l'ESP (École Supérieure Polytechnique) en mettant en place une plateforme web et desktop spécifiquement dédiée à la gestion de l'effectivité des enseignements.

### 1. Interface FrontOFFICE en Angular
Développement d'une interface utilisateur en utilisant le framework Angular. Cette interface est destinée aux étudiants et aux enseignants.

### 2. Interface BackOFFICE en Python QT 
Développement d'une interface BackOFFICE en utilisant le framework Python QT. Cette interface est dédiée au personnel administratif.

## Pré-requis

Assurez-vous d'avoir Node.js installé sur votre machine. Ensuite, installez Angular CLI (Command Line Interface) en utilisant la commande suivante dans votre terminal :
`npm install -g @angular/cli`

Ensuite, exécutez la commande suivante :
`ng serve`

Naviguez enfin entre les pages du site.

## Utilisation


## La structure du backOffice 'pyqtProject'

```
pyqtProject/
│
├── ui/                  # Dossier pour les fichiers de conception d'interface utilisateur (fichiers .ui)
│   ├── mainwindow.ui    # Interface principale de l'application
│   ├── document.ui      # Interface pour la génération de documents administratifs
│   └── ...
│
├── src/                 # Dossier pour les fichiers source Python
│   ├── main.py          # Point d'entrée de l'application
│   ├── document.py      # Module pour la génération de documents administratifs
│   ├── qrcode.py        # Module pour la génération de QR codes
│   ├── seConnecter.py   # Module pour la connexion à la base de données MySQL
│   ├── inscription.py   # Module pour gérer l'inscription des utilisateurs
│   └── espaceAdmin.py   # Module pour l'espace d'administration
│
├── database/            # Dossier pour les fichiers de configuration de base de données
│   ├── mysql_config.py  # Fichier de configuration pour la connexion à MySQL
│   └── ...
│
├── assets/              # Dossier pour les ressources supplémentaires comme image
│   ├── logo.png         # Logo de l'entreprise
│   └── ...
│
└── README.md            # Documentation du projet


```


## Equipe projet

|Nom       |Prenom         | Mail                                                |
-----------|---------------|-----------------------------------------------------|
|BA        |Aminata        |[aminataba@esp.sn](mailto:aminataba@esp.sn)          |
|DIOUM     |Mariama        |[mariamadioum@esp.sn](mailto:mariamadioum@esp.sn)    |
|DRAME     |Ousmane        |[ousmanedrame@esp.sn](mailto:ousmanedrame@esp.sn)    |
|SYLLA     | Dié           |[diesylla@esp.sn](mailto:diesylla@esp.sn)            |
