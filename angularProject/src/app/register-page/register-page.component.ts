import { HttpClient, HttpClientModule } from '@angular/common/http';
import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { Router, RouterLink } from '@angular/router';

@Component({
  selector: 'app-register-page',
  standalone: true,
  imports: [FormsModule, RouterLink, HttpClientModule],
  templateUrl: './register-page.component.html',
  styleUrl: './register-page.component.css'
})
export class RegisterPageComponent {
  registerObj:any = {
    nom: '',
    prenom: '',
    role: '',
    email: '',
    password: ''

  }
  constructor(private router: Router, private http:HttpClient) { } // Injectez le Router dans le constructeur
 
  onRegister() {

    this.http.post('http://127.0.0.1:8000/api/auth/register', this.registerObj).subscribe((res:any)=>{
      if(res.status) {
        if (this.registerObj.role == 'etudiant') {
          
          this.router.navigateByUrl('/dashboard/accueil')
        }
        else(

          this.router.navigate(['enseignant/accueil-enseignant'])
        )

      } else {
        alert(res.statusText)
        alert('Connexion echouée')
        
      }
    })
  }
}
