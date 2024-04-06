import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { Router, RouterLink } from '@angular/router';


@Component({
  selector: 'app-login-page',
  standalone: true,
  imports: [FormsModule, RouterLink],
  templateUrl: './login-page.component.html',
  styleUrl: './login-page.component.css'
})
export class LoginPageComponent {

  loginObj:any = {
    email: '',
    password: ''

  }
  constructor(private router: Router) { } // Injectez le Router dans le constructeur

  onLogin() {
    if (this.loginObj.email =="etudiant@esp.sn" && this.loginObj.password=="passer") {
      this.router.navigate(['dashboard/accueil'])      
    }
    else if (this.loginObj.email =="enseignant@esp.sn" && this.loginObj.password=="passer") {
      this.router.navigate(['enseignant/accueil-enseignant'])
    }
    else {
      alert("Incorrect")
    }
  }
}
