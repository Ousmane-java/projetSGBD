import { HttpClient, HttpClientModule } from '@angular/common/http';
import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { Router, RouterLink } from '@angular/router';


@Component({
  selector: 'app-login-page',
  standalone: true,
  imports: [FormsModule, RouterLink, HttpClientModule],
  templateUrl: './login-page.component.html',
  styleUrl: './login-page.component.css'
})


export class LoginPageComponent {

  loginObj: Login;

  constructor(private http: HttpClient,private router: Router) {
    this.loginObj = new Login();
  }

  onLogin() {
    this.http.post('http://127.0.0.1:8000/api/auth/login', this.loginObj).subscribe((res:any)=>{
      if(res.status) {
        this.router.navigateByUrl('/dashboard/accueil')
      } else {
        alert(res.statusText)
        alert('Connexion echouée')
        
      }
    })
  }
}

export class Login { 
    email: string;
    password: string;
    constructor() {
      this.email = '';
      this.password = '';
    } 
}
// export class LoginPageComponent {

//   loginObj:any = {
//     email: '',
//     password: ''

//   }
//   constructor(private router: Router) { } // Injectez le Router dans le constructeur

//   onLogin() {
//     if (this.loginObj.email =="etudiant@esp.sn" && this.loginObj.password=="passer") {
//       this.router.navigate(['dashboard/accueil'])      
//     }
//     else if (this.loginObj.email =="enseignant@esp.sn" && this.loginObj.password=="passer") {
//       this.router.navigate(['enseignant/accueil-enseignant'])
//     }
//     else {
//       alert("Incorrect")
//     }
//   }
// }
