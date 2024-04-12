import { NgFor } from '@angular/common';
import { HttpClient, HttpClientModule } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { Router, RouterLink } from '@angular/router';

@Component({
  selector: 'app-enseignement-enseignant',
  standalone: true,
  imports: [FormsModule, RouterLink, HttpClientModule, NgFor],
  templateUrl: './accueil.component.html',
  styleUrl: './accueil.component.css'
})
export class AccueilComponent implements OnInit {

  Cahier: any[] = [];

  cahier:any = {
    professeur: '',
    titre: '',
    dateCC: '',
    dateDS: '',
    resource: ''

  }

  constructor(private router: Router, private http:HttpClient) { } // Injectez le Router dans le constructeur


  ngOnInit(): void {
this.loadCahier()
  }


  onCahier(){
    this.http.post('http://127.0.0.1:8000/api/createCahier', this.cahier).subscribe((res:any)=>{
      if (res.status) {
        alert("Cahier mis à jour avec succès !")
      }
      else {
        alert(res.error)
      }
    })
}

loadCahier() {
  this.http.get('http://127.0.0.1:8000/api/cahier').subscribe((res:any)=>{
    console.log(res.status)
    this.Cahier = res.cahier;
})



}
}


