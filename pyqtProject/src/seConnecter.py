import sys
from PyQt5.QtWidgets import QApplication, QWidget, QLabel, QLineEdit, QPushButton, QVBoxLayout, QGridLayout, QMessageBox
from PyQt5.QtGui import QPixmap
from PyQt5.QtCore import Qt
import mysql.connector
from inscription import InscriptionPage
from espaceAdmin import EspaceAdminPage

from PyQt5.QtWidgets import QWidget, QVBoxLayout, QLabel

class ConnectWindow(QWidget):
    def __init__(self):
        super().__init__()

        self.setWindowTitle("Se Connecter")
        self.setGeometry(200, 200, 400, 300)

        layout = QVBoxLayout()

        connect_label = QLabel("<center>Page de connexion</center>")
        connect_label.setStyleSheet("font-size: 20px;")
        layout.addWidget(connect_label)

        # Ajoutez ici d'autres éléments de la page de connexion

        self.setLayout(layout)


class AdminLoginPage(QWidget):
    def __init__(self):
        super().__init__()

        self.setWindowTitle("Page de Connexion Administrateur")
        self.setGeometry(0, 0, 400, 200)  # Taille arbitraire
        self.center()

        self.init_ui()

    def center(self):
        # Centrer la fenêtre sur l'écran
        screen_geometry = QApplication.desktop().screenGeometry()
        x = int((screen_geometry.width() - self.width()) / 2)
        y = int((screen_geometry.height() - self.height()) / 2)
        self.move(x, y)

    def init_ui(self):
        layout = QVBoxLayout()
        grid_layout = QGridLayout()

        # Image
        image_label = QLabel()
        # Mettez ici le chemin de votre image
        image_label.setPixmap(QPixmap("C:\\Users\\HP ELITEBOOK G5\\Desktop\\projetSGBD\\pyqtProject\\src\\téléchargement.png"))  

        image_label.setAlignment(Qt.AlignCenter)
        grid_layout.addWidget(image_label, 0, 0, 1, 2)

        # Email
        email_label = QLabel("Email:")
        self.email_input = QLineEdit()
        grid_layout.addWidget(email_label, 1, 0)
        grid_layout.addWidget(self.email_input, 1, 1)

        # Mot de passe
        password_label = QLabel("Mot de passe:")
        self.password_input = QLineEdit()
        self.password_input.setEchoMode(QLineEdit.Password)
        grid_layout.addWidget(password_label, 2, 0)
        grid_layout.addWidget(self.password_input, 2, 1)

        # Bouton Connexion
        login_button = QPushButton("Se connecter")
        login_button.clicked.connect(self.login)
        grid_layout.addWidget(login_button, 3, 0, 1, 2)

        # Bouton S'inscrire
        signup_button = QPushButton("S'inscrire si vous n'avez pas de compte")
        signup_button.clicked.connect(self.go_to_signup_page)
        grid_layout.addWidget(signup_button, 4, 0, 1, 2)

        # Bouton Mot de passe oublié
        forgot_password_button = QPushButton("Mot de passe oublié")
        forgot_password_button.clicked.connect(self.forgot_password)
        grid_layout.addWidget(forgot_password_button, 5, 0, 1, 2)

        layout.addLayout(grid_layout)
        self.setLayout(layout)

    def login(self):
        email = self.email_input.text()
        password = self.password_input.text()
        
        # Vérifier les informations d'identification dans la base de données
        if self.check_credentials(email, password):
            # Redirection vers la page espaceAdmin
            self.redirect_to_admin_page()
        else:
            QMessageBox.warning(self, "Erreur de Connexion", "Email ou mot de passe incorrect")

    def check_credentials(self, email, password):
        # Connexion à la base de données
        conn = mysql.connector.connect(
            host="localhost",
            user="marie",
            password="passer",
            database="sgbd"  # Assurez-vous d'avoir la bonne base de données
        )
        cursor = conn.cursor()

        # Exécutez la requête pour vérifier les informations d'identification
        query = "SELECT * FROM Administrateur WHERE email = %s AND motDePasse = %s"
        cursor.execute(query, (email, password))
        result = cursor.fetchone()

        # Fermez la connexion à la base de données
        cursor.close()
        conn.close()

        return result is not None

    def redirect_to_admin_page(self):
        # Redirection vers la page espaceAdmin
        self.admin_page = EspaceAdminPage()
        self.admin_page.show()
        self.close()

    def forgot_password(self):
        # Code pour rediriger vers la page de réinitialisation du mot de passe
        pass

    def go_to_signup_page(self):
        # Ouvrir la page d'inscription
        self.signup_page = InscriptionPage()
        self.signup_page.show()
        self.close()

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

if __name__ == "__main__":
    app = QApplication(sys.argv)
    window = AdminLoginPage()
    window.show()
    sys.exit(app.exec_())
