CREATE DATABASE GestionEnseignant;

USE GestionEnseignant;

CREATE TABLE Enseignant (
    idEnseignant INT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(100), 
    motDePasse VARCHAR(100)
);

CREATE TABLE Etudiant (
    idEtudiant INT PRIMARY KEY,
    nom VARCHAR(100),
    prenom VARCHAR(100)
);

CREATE TABLE Cours (
    idCours INT PRIMARY KEY,
    nomCours VARCHAR(255),
    horaire VARCHAR(50),
    idEnseignant INT,
    FOREIGN KEY (idEnseignant) REFERENCES Enseignant(idEnseignant)
);

CREATE TABLE Syllabus (
    idSyllabus INT PRIMARY KEY AUTO_INCREMENT,
    contenu TEXT,
    nombreHeures INT,
    objectif TEXT,
    titre VARCHAR(255),
    evaluation TEXT,
    nombreHeure VARCHAR(50),
    dateCC DATE,
    dateDS DATE,
    resource TEXT,
    politiqueCours TEXT,
    idEnseignant INT,
    FOREIGN KEY (idEnseignant) REFERENCES Enseignant(idEnseignant)
);

CREATE TABLE Note (
    idNote INT PRIMARY KEY AUTO_INCREMENT,
    idEtudiant INT,
    idEnseignant INT,
    noteDS FLOAT,
    dateDS DATE,
    evaluation TEXT,
    FOREIGN KEY (idEtudiant) REFERENCES Etudiant(idEtudiant),
    FOREIGN KEY (idEnseignant) REFERENCES Enseignant(idEnseignant)
);

CREATE TABLE Cahier (
    idCahier INT PRIMARY KEY AUTO_INCREMENT,
    idEtudiant INT,
    contenu TEXT,
    date DATE,
    heure INT,
    idEnseignant INT,
    FOREIGN KEY (idEtudiant) REFERENCES Etudiant(idEtudiant),
    FOREIGN KEY (idEnseignant) REFERENCES Enseignant(idEnseignant)
);

CREATE TABLE Avis (
    idAvis INT PRIMARY KEY AUTO_INCREMENT,
    idEtudiant INT,
    idCours INT,
    commentaire TEXT,
    FOREIGN KEY (idEtudiant) REFERENCES Etudiant(idEtudiant),
    FOREIGN KEY (idCours) REFERENCES Cours(idCours)
);

CREATE TABLE Administrateur (
    idAdmin INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    role VARCHAR(100),
    email VARCHAR(100),
    motDePasse VARCHAR(100)
);

CREATE TABLE Rapport (
    idRapport INT PRIMARY KEY AUTO_INCREMENT,
    typeRapport VARCHAR(100),
    contenu TEXT,
    idAdmin INT,
    dateCreation DATE,
    FOREIGN KEY (idAdmin) REFERENCES Administrateur(idAdmin)
);

CREATE TABLE ConsultationCahier (
    idConsultation INT PRIMARY KEY AUTO_INCREMENT,
    idAdmin INT,
    idCahier INT,
    dateConsultation DATE,
    FOREIGN KEY (idAdmin) REFERENCES Administrateur(idAdmin),
    FOREIGN KEY (idCahier) REFERENCES Cahier(idCahier)
);

CREATE TABLE GestionRapport (
    idGestionRapport INT PRIMARY KEY AUTO_INCREMENT,
    idAdmin INT,
    idRapport INT,
    action VARCHAR(50),
    dateGestion DATE,
    FOREIGN KEY (idAdmin) REFERENCES Administrateur(idAdmin),
    FOREIGN KEY (idRapport) REFERENCES Rapport(idRapport)
);

CREATE TABLE AvisEtudiant (
    idAvisEtudiant INT PRIMARY KEY AUTO_INCREMENT,
    idEtudiant INT,
    idCours INT,
    commentaire TEXT,
    dateAvis DATE,
    FOREIGN KEY (idEtudiant) REFERENCES Etudiant(idEtudiant),
    FOREIGN KEY (idCours) REFERENCES Cours(idCours)
);

CREATE TABLE SyllabusEnseignant (
    idSyllabusEnseignant INT PRIMARY KEY AUTO_INCREMENT,
    idEnseignant INT,
    idCours INT,
    contenu TEXT,
    dateCreation DATE,
    FOREIGN KEY (idEnseignant) REFERENCES Enseignant(idEnseignant),
    FOREIGN KEY (idCours) REFERENCES Cours(idCours)
);

CREATE TABLE DisponibiliteEnseignant (
    idDisponibilite INT PRIMARY KEY AUTO_INCREMENT,
    idEnseignant INT,
    dateDisponibilite DATE,
    heureDebut TIME,
    heureFin TIME,
    disponible BOOLEAN,
    motifAnnulation TEXT,
    FOREIGN KEY (idEnseignant) REFERENCES Enseignant(idEnseignant)
);
