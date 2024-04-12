import sys
from PyQt5.QtCore import Qt
from PyQt5.QtWidgets import QApplication, QWidget, QLabel, QPushButton, QVBoxLayout
from PyQt5.QtGui import QPixmap
class WelcomeWindow(QWidget):
    def __init__(self):
        super().__init__()

        layout = QVBoxLayout()

        welcome_label = QLabel("<center><h1>Bienvenue sur eduPortal</h1></center>")
        welcome_label.setStyleSheet("font-size: 30px;")
        layout.addWidget(welcome_label)

        welcome_desc_label = QLabel("<center><h2>Découvrez une expérience d'apprentissage innovante et simplifiée avec notre application,<br> où chaque interaction façonne votre succès académique.<h2></center>")
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
        layout.setContentsMargins(100, 50, 100, 50)

        self.setLayout(layout)

    def open_connect_page(self):
        # Importez ConnectWindow depuis seConnecter.py pour éviter les erreurs d'importation circulaire
        from seConnecter import ConnectWindow
        
        # Créez une instance de ConnectWindow et affichez-la
        self.connect_window = ConnectWindow()
        self.connect_window.show()

if __name__ == "__main__":
    app = QApplication(sys.argv)
    window = WelcomeWindow()
    window.show()
    sys.exit(app.exec_())
