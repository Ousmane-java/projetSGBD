import sys
from PyQt5.QtWidgets import QApplication, QMainWindow
from ui_DashInfoSec import Ui_MainWindow
from assets import files



class MainWindow(QMainWindow):
    def __init__(self):
        QMainWindow.__init__(self)
        self.ui_main = Ui_MainWindow()
        self.ui_main.setupUi(self)

        # CLICK SELECT DASHBOARD
        self.ui_main.pushButton_DashBoard.clicked.connect(lambda: self.click_select_tab(0))
        self.ui_main.pushButton_DashBoard.setText("Accueil")
        # CLICK SELECT QUICKSTART
        self.ui_main.pushButton_QuickStart.clicked.connect(lambda: self.click_select_tab(1))
        self.ui_main.pushButton_QuickStart.setText("Décision")
        # CLICK SELECT ASSETS
        self.ui_main.pushButton_Assets.clicked.connect(lambda: self.click_select_tab(2))
        self.ui_main.pushButton_Assets.hide()
        # CLICK SELECT REPORT
        self.ui_main.pushButton_Report.clicked.connect(lambda: self.click_select_tab(3))
        self.ui_main.pushButton_Report.setText("Rapport")
        # CLICK SELECT CONFIG
        self.ui_main.pushButton_Config.clicked.connect(lambda: self.click_select_tab(4))
        # CLICK SELECT ABOUT
        self.ui_main.pushButton_About.clicked.connect(lambda: self.click_select_tab(5))
        # SHOW FORM
        self.show()

    def click_select_tab(self, index_int: int):
        if index_int == 0:
            self.ui_main.stackedWidget_Control.setCurrentIndex(index_int)
        else:
            # Rediriger vers la page de connexion
            self.redirect_to_login_page()

    def redirect_to_login_page(self):
        self.login_page = AdminLoginPage()
        self.login_page.show()

if __name__ == "__main__":
    try:
        app = QApplication(sys.argv)
        window = MainWindow()
        sys.exit(app.exec_())
    except KeyboardInterrupt:
        pass
