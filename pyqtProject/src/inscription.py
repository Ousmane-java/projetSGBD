import sys
from PyQt5.QtWidgets import QApplication, QWidget, QLabel, QLineEdit, QPushButton, QVBoxLayout, QGridLayout
from PyQt5.QtCore import Qt


class AdminLoginPage(QWidget):
    def __init__(self):
        super().__init__()

        self.setWindowTitle("Page d'Inscription Administrateur")
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
        labels = ["Nom:", "Prénom:", "Email:", "Mot de passe:"]
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
        print("Nouvel utilisateur enregistré:")
        print("Nom:", data[0])
        print("Prénom:", data[1])
        print("Email:", data[2])
        # Ici vous pouvez ajouter du code pour enregistrer les informations dans une base de données ou tout autre traitement nécessaire


if __name__ == "__main__":
    app = QApplication(sys.argv)
    window = AdminLoginPage()
    window.show()
    sys.exit(app.exec_())
