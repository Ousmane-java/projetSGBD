import { Component } from '@angular/core';
<<<<<<< HEAD
=======
import { FormsModule } from '@angular/forms';
import { Router } from '@angular/router';

>>>>>>> 7c2032c0943b6eaa8ff8502e522076eba818042d

@Component({
  selector: 'app-login-page',
  standalone: true,
<<<<<<< HEAD
  imports: [],
=======
  imports: [FormsModule],
>>>>>>> 7c2032c0943b6eaa8ff8502e522076eba818042d
  templateUrl: './login-page.component.html',
  styleUrl: './login-page.component.css'
})
export class LoginPageComponent {

<<<<<<< HEAD
=======
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
>>>>>>> 7c2032c0943b6eaa8ff8502e522076eba818042d
}
