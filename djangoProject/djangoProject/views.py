from django.shortcuts import render
from PyQt5.QtWidgets import QApplication, QMainWindow, QLabel, QPushButton, QVBoxLayout, QWidget
import sys

def my_pyqt_view(request):
    class MainWindow(QMainWindow):
        def __init__(self):
            super().__init__()

            self.setWindowTitle("Ma Application PyQt dans Django")
            self.setGeometry(100, 100, 600, 400)

            # Définir les éléments de l'interface PyQt
            self.label = QLabel("Bonjour, Monde!", self)
            self.button = QPushButton("Cliquez ici!", self)

            layout = QVBoxLayout()
            layout.addWidget(self.label)
            layout.addWidget(self.button)

            central_widget = QWidget()
            central_widget.setLayout(layout)
            self.setCentralWidget(central_widget)

    # Lancer l'application PyQt
    app = QApplication(sys.argv)
    window = MainWindow()
    window.show()

    # Rendre l'application PyQt dans un navigateur
    return render(request, 'pyqt_template.html')
