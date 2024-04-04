from PyQt5.QtWidgets import QApplication, QWidget, QLabel, QLineEdit, QPushButton, QVBoxLayout, QGridLayout
from PyQt5.QtCore import Qt
import mysql.connector
from espaceAdmin import EspaceAdminPage

class InscriptionPage(QWidget):
    def __init__(self):
        super().__init__()

        self.setWindowTitle("Page d'Inscription")
        self.setGeometry(0, 0, 400, 200)  # Taille arbitraire
        self.center()

        self.init_ui()

    def center(self):
        # Centrer la fenêtre sur l'écran
        screen_geometry = QApplication.desktop().screenGeometry()
        x = (screen_geometry.width() - self.width()) // 2
        y = (screen_geometry.height() - self.height()) // 2
        self.move(x, y)

    def init_ui(self):
        layout = QVBoxLayout()
        grid_layout = QGridLayout()

        # Labels et inputs
        labels = ["Nom:", "Prénom:", "Email:", "Mot de passe:", "Rôle:"]
        self.inputs = []
        for row, label_text in enumerate(labels):
            label = QLabel(label_text)
            input_field = QLineEdit()
            grid_layout.addWidget(label, row, 0)
            grid_layout.addWidget(input_field, row, 1)
            self.inputs.append(input_field)

        # Bouton Inscription
        signup_button = QPushButton("S'inscrire")
        signup_button.clicked.connect(self.signup)
        grid_layout.addWidget(signup_button, len(labels), 0, 1, 2)

        layout.addLayout(grid_layout)
        self.setLayout(layout)

    def signup(self):
        # Récupération des données du formulaire
        data = [input_field.text() for input_field in self.inputs]
        print("Nouvel administrateur enregistré:")
        print("Nom:", data[0])
        print("Prénom:", data[1])
        print("Email:", data[2])
        print("Rôle:", data[4])

        # Enregistrer l'utilisateur dans la base de données
        self.insert_user_to_database(*data)

        # Redirection vers la page espaceAdmin
        self.redirect_to_admin_page()

    def insert_user_to_database(self, nom, prenom, email, mot_de_passe, role):
        # Connexion à la base de données MySQL
        conn = mysql.connector.connect(
            host="localhost",
            user="marie",
            password="passer",
            database="sgbd"
        )

        cursor = conn.cursor()

        # Insertion des données dans la table Administrateur
        sql = "INSERT INTO Administrateur (nom, prenom, email, motDePasse, role) VALUES (%s, %s, %s, %s, %s)"
        val = (nom, prenom, email, mot_de_passe, role)
        cursor.execute(sql, val)

        # Validation de la transaction et fermeture de la connexion
        conn.commit()
        conn.close()

    def redirect_to_admin_page(self):
        # Redirection vers la page espaceAdmin
        self.admin_page = EspaceAdminPage()
        self.admin_page.show()
        self.close()

if __name__ == "__main__":
    app = QApplication([])
    window = InscriptionPage()
    window.show()
    app.exec_()
