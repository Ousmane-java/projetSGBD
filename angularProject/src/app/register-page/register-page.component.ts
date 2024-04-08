import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { Router, RouterLink } from '@angular/router';

@Component({
  selector: 'app-register-page',
  standalone: true,
  imports: [FormsModule, RouterLink],
  templateUrl: './register-page.component.html',
  styleUrl: './register-page.component.css'
})
export class RegisterPageComponent {
  registerObj:any = {
    email: '',
    password: ''

  }
  constructor(private router: Router) { } // Injectez le Router dans le constructeur

  onRegister() {
    if (this.registerObj.email =="admin@esp.sn" && this.registerObj.password=="passer") {
      this.router.navigate(['dashboard/accueil'])      
    }
    else {
      alert("Incorrect")
    }
  }
}
