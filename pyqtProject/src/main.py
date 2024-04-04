import sys
from PyQt5.QtCore import Qt
from PyQt5.QtWidgets import QApplication, QWidget, QLabel, QPushButton, QVBoxLayout
from PyQt5.QtGui import QPixmap

class WelcomeWindow(QWidget):
    def __init__(self):
        super().__init__()

        self.setWindowTitle("Bienvenue")
        self.setGeometry(100, 100, 600, 400)

        layout = QVBoxLayout()

        welcome_label = QLabel("<center>Bienvenue</center>")
        welcome_label.setStyleSheet("font-size: 30px;")
        layout.addWidget(welcome_label)

        welcome_desc_label = QLabel("<center>envoyez vos colis en toute sécurité, où que vous soyez</center>")
        layout.addWidget(welcome_desc_label)

        connexion_button = QPushButton("Connexion")
        connexion_button.setStyleSheet("font-size: 20px; padding: 15px 20px; border-radius: 50px; border: 1px solid #007574;")
        layout.addWidget(connexion_button)
        connexion_button.clicked.connect(self.open_connect_page)

        image_label = QLabel()
        pixmap = QPixmap("image/acceuil.jpg")  # Assurez-vous que l'image existe dans le répertoire
        image_label.setPixmap(pixmap)
        image_label.setAlignment(Qt.AlignCenter)
        layout.addWidget(image_label)

        layout.setSpacing(20)

        # Réduire les marges autour du bouton
        layout.setContentsMargins(100, 50, 100, 50)

        self.setLayout(layout)

    def open_connect_page(self):
        # Mettez ici le code pour afficher la page "seConnecter"
        print("Ouvrir la page de connexion")

if __name__ == "__main__":
    app = QApplication(sys.argv)
    window = WelcomeWindow()
    window.show()
    sys.exit(app.exec_())
