import { NgFor } from '@angular/common';
import { HttpClient, HttpClientModule } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { Router, RouterLink } from '@angular/router';

@Component({
  selector: 'app-enseignement-enseignant',
  standalone: true,
  imports: [FormsModule, RouterLink, HttpClientModule, NgFor],
  templateUrl: './enseignement-enseignant.component.html',
  styleUrl: './enseignement-enseignant.component.css'
})
export class EnseignementEnseignantComponent implements OnInit{

  Syllabus: any[] = [];

  syllabus:any = {
    professeur: '',
    titre: '',
    dateCC: '',
    dateDS: '',
    resource: ''

  }

  constructor(private router: Router, private http:HttpClient) { } // Injectez le Router dans le constructeur


  ngOnInit(): void {
this.loadSyllabus()
  }


  onSyllabus(){
    this.http.post('http://127.0.0.1:8000/api/createSyllabus', this.syllabus).subscribe((res:any)=>{
      if (res.status) {
        alert("Syllabus ajouté avec succès !")
      }
      else {
        alert(res.error)
      }
    })
}

loadSyllabus() {
  this.http.get('http://127.0.0.1:8000/api/syllabus').subscribe((res:any)=>{
    console.log(res.status)
    this.Syllabus = res.syllabus;
})



}
}
