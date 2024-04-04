import { Component } from '@angular/core';
<<<<<<< HEAD
import { FormsModule } from '@angular/forms';
import { Router } from '@angular/router';

=======
>>>>>>> main

@Component({
  selector: 'app-login-page',
  standalone: true,
<<<<<<< HEAD
  imports: [FormsModule],
=======
  imports: [],
>>>>>>> main
  templateUrl: './login-page.component.html',
  styleUrl: './login-page.component.css'
})
export class LoginPageComponent {

<<<<<<< HEAD
  loginObj:any = {
    email: '',
    password: ''

  }
  constructor(private router: Router) { } // Injectez le Router dans le constructeur

  onLogin() {
    if (this.loginObj.email =="admin@esp.sn" && this.loginObj.password=="passer") {
      this.router.navigate(['dashboard/accueil'])      
    }
    else {
      alert("Incorrect")
    }
  }
=======
>>>>>>> main
}
