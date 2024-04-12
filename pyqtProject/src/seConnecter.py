import sys
from PyQt5.QtWidgets import QApplication, QWidget, QLabel, QLineEdit, QPushButton, QVBoxLayout, QMessageBox, QHBoxLayout
from PyQt5.QtGui import QPixmap
from PyQt5.QtCore import Qt
import mysql.connector
from inscription import InscriptionPage
from espaceAdmin import EspaceAdminPage


class AdminLoginPage(QWidget):
    def __init__(self):
        super().__init__()

        self.session = Session()

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

        # Image
        image_label = QLabel()
        image_label.setPixmap(QPixmap("chemin/vers/votre/image.png"))
        image_label.setAlignment(Qt.AlignCenter)
        layout.addWidget(image_label)

        # Email
        self.email_input = QLineEdit()
        self.email_input.setPlaceholderText("Email")
        layout.addWidget(self.email_input)

        # Mot de passe
        self.password_input = QLineEdit()
        self.password_input.setPlaceholderText("Mot de passe")
        self.password_input.setEchoMode(QLineEdit.Password)
        layout.addWidget(self.password_input)

        # Boutons Connexion et Inscription
        button_layout = QHBoxLayout()
        login_button = QPushButton("Se connecter")
        login_button.clicked.connect(self.login)
        button_layout.addWidget(login_button)

        signup_button = QPushButton("S'inscrire si vous n'avez pas de compte")
        signup_button.clicked.connect(self.go_to_signup_page)
        button_layout.addWidget(signup_button)

        layout.addLayout(button_layout)

        self.setLayout(layout)

    def login(self):
        email = self.email_input.text()
        password = self.password_input.text()
        
        if self.check_credentials(email, password):
            user_data = self.get_user_data(email)
            if user_data:
                self.session.set_user_data(user_data)
                self.redirect_to_admin_page()
            else:
                QMessageBox.warning(self, "Erreur", "Impossible de récupérer les informations de l'utilisateur.")
        else:
            QMessageBox.warning(self, "Erreur de Connexion", "Email ou mot de passe incorrect")

    def check_credentials(self, email, password):
        conn = mysql.connector.connect(
            host="localhost",
            user="marie",
            password="passer",
            database="sgbd"
        )
        cursor = conn.cursor()
        query = "SELECT * FROM Administrateur WHERE email = %s AND motDePasse = %s"
        cursor.execute(query, (email, password))
        result = cursor.fetchone()
        cursor.close()
        conn.close()
        return result is not None

    def get_user_data(self, email):
        conn = mysql.connector.connect(
            host="localhost",
            user="marie",
            password="passer",
            database="sgbd"
        )
        cursor = conn.cursor()
        query = "SELECT nom, prenom, role FROM Administrateur WHERE email = %s"
        cursor.execute(query, (email,))
        user_data = cursor.fetchone()
        cursor.close()
        conn.close()
        return user_data

    def redirect_to_admin_page(self):
        user_data = self.session.get_user_data()
        if user_data:
            self.admin_page = EspaceAdminPage(user_data)
            self.admin_page.show()
            self.close()

    def go_to_signup_page(self):
        self.signup_page = InscriptionPage()
        self.signup_page.show()
        self.close()

if __name__ == "__main__":
    app = QApplication(sys.argv)
    window = AdminLoginPage()
    window.show()
    sys.exit(app.exec_())
