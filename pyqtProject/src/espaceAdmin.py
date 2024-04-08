from PyQt5.QtWidgets import QApplication, QWidget, QLabel, QVBoxLayout

class EspaceAdminPage(QWidget):
    def __init__(self):
        super().__init__()

        self.setWindowTitle("Espace Administrateur")
        self.setGeometry(0, 0, 400, 200)  
        self.center()

        self.init_ui()

    def center(self):
        
        screen_geometry = QApplication.desktop().screenGeometry()
        x = (screen_geometry.width() - self.width()) // 2
        y = (screen_geometry.height() - self.height()) // 2
        self.move(x, y)

    def init_ui(self):
        layout = QVBoxLayout()
        
        label = QLabel("Bienvenue dans l'espace administrateur!")
        layout.addWidget(label)

        self.setLayout(layout)


if __name__ == "__main__":
    app = QApplication([])
    window = EspaceAdminPage()
    window.show()
    app.exec_()
