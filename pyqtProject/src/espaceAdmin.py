from PyQt5.QtWidgets import QApplication, QWidget, QLabel, QVBoxLayout

class EspaceAdminPage(QWidget):
    def __init__(self, user_data):
        super().__init__()

        self.setWindowTitle("Espace Administrateur")
        self.setGeometry(0, 0, 600, 400)  # Taille arbitraire
        self.center()

        self.init_ui(user_data)

    def center(self):
        # Centrer la fenêtre sur l'écran
        screen_geometry = QApplication.desktop().screenGeometry()
        x = int((screen_geometry.width() - self.width()) / 2)
        y = int((screen_geometry.height() - self.height()) / 2)
        self.move(x, y)

    def init_ui(self, user_data):
        layout = QVBoxLayout()

        welcome_label = QLabel(f"Bienvenue {user_data[0]} {user_data[1]}")
        role_label = QLabel(f"Rôle: {user_data[2]}")

        layout.addWidget(welcome_label)
        layout.addWidget(role_label)

        self.setLayout(layout)
