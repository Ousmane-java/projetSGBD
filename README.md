# Gestion de l'effectivité des enseignements

Projet de SGBD (sytème de gestion de base de données) réalisé en groupe à l'ESP
## Description

Le projet vise à numériser les procédures de gestion pédagogique de l'ESP (École Supérieure Polytechnique) en mettant en place une plateforme web et desktop spécifiquement dédiée à la gestion de l'effectivité des enseignements.

  #### Présentation PowerPoint: [click here](https://docs.google.com/presentation/d/1wpXHRbTdrj8j-Nax4serAhtAG2Ml-qTSQWAy5bLAW0I/edit?usp=sharing)  <br>

  #### Rapport de projet : [click here](https://docs.google.com/document/d/1Jihqa3khZIEIaghmiaQ51xmGEDJH79BnCffpxaUO3u0/edit?usp=sharing)


### 1. Interface FrontOFFICE en Angular
Développement d'une interface utilisateur en utilisant le framework Angular. Cette interface est destinée aux étudiants et aux enseignants.

### 2. Interface BackOFFICE en Python QT 
Développement d'une interface BackOFFICE en utilisant le framework Python QT. Cette interface est dédiée au personnel administratif.

## Pré-requis

### Angular frontend

Assurez-vous d'avoir Node.js installé sur votre machine. Placez-vous dans le repertoire :
`cd angularProject`

Ensuite, installez Angular CLI (Command Line Interface) en utilisant la commande suivante dans votre terminal :
`npm install -g @angular/cli`

Ensuite, exécutez la commande suivante :
`ng serve`

Naviguez enfin entre les pages du site.
`http://localhost:4200/`

### Laravel backend

Placez-vous dans le repertoire :

`cd aircraftdb`
Creer votre propre base de donnée dans le repertoire .env file.
`cp .env .env.example`

Ensuite, exécutez la commande suivante :
`composer install`

`php artisan migrate`

`php artisan serve`

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


## Technologies utilisées

![techStack](https://github.com/Ousmane-java/projetSGBD/blob/main/snapshots/technologies.png)

### 1. Front Office :
  - Angular
  - Laravel
  - HTML
  - CSS
  - TypeScript
  - JavaScript
  
### 2. Back Office :
  - Python & PythonQt
  
### 3. Database:
  - MySQL

## Snapshots

1. Accueil

![homepg](https://github.com/Ousmane-java/projetSGBD/blob/main/snapshots/accueil.png)

2. Login page

![loginpg](https://github.com/Ousmane-java/projetSGBD/blob/main/snapshots/page-connexion.png)

3. Page accueil responsable classe

![acc](https://github.com/Ousmane-java/projetSGBD/blob/main/snapshots/page-cahier-texte.png)

4. Page enseignement etudiant

![ensetu](https://github.com/Ousmane-java/projetSGBD/blob/main/snapshots/syllabus-dispo-etu.png)

5. Page feedback etudiant

![feedetu](https://github.com/Ousmane-java/projetSGBD/blob/main/snapshots/avis-etudiant.png)

6. Page ajout syllabus enseignant

![syllens](https://github.com/Ousmane-java/projetSGBD/blob/main/snapshots/ajout-syllabus.png)

7. Page ajout note enseignant

![noteens](https://github.com/Ousmane-java/projetSGBD/blob/main/snapshots/notes-etudiants.png)

### Back-Office

8. Page d'accueil back-office

![accback](https://github.com/Ousmane-java/projetSGBD/blob/main/snapshots/accueilback.png)

9. Tableau de bord back-office

![dashback](https://github.com/Ousmane-java/projetSGBD/blob/main/snapshots/dashboardback.png)

10. Page de connexion back-office

![logback](https://github.com/Ousmane-java/projetSGBD/blob/main/snapshots/snapshots/IMG_0062.PNG)

11. Page d'inscription back-office

![insback](https://github.com/Ousmane-java/projetSGBD/blob/main/snapshots/snapshots/IMG_0062.PNG)


