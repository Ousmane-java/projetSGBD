import { HttpClient, HttpClientModule } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { Router, RouterLink } from '@angular/router';

@Component({
  selector: 'app-etudiant-enseignant',
  standalone: true,
  imports: [FormsModule, RouterLink, HttpClientModule],
  templateUrl: './etudiant-enseignant.component.html',
  styleUrl: './etudiant-enseignant.component.css'
})
export class EtudiantEnseignantComponent implements OnInit{

  Syllabus: any[] = [];
  constructor(private http: HttpClient,private router: Router) {}

  ngOnInit(): void {}

  loadSyllabus() {
    this.http.get('http://127.0.0.1:8000/api/syllabus').subscribe((res:any)=>{
      // this.Syllabus = res.syllabus;
      console.log(res)
  })



}

}
