import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
<<<<<<< HEAD
import { RouterLink } from '@angular/router';
=======
import { RouterLink, RouterLinkActive, RouterOutlet } from '@angular/router';
>>>>>>> main

@Component({
  selector: 'app-home',
  standalone: true,
<<<<<<< HEAD
  imports: [RouterLink],
=======
  imports: [CommonModule, RouterOutlet, RouterLink, RouterLinkActive],
>>>>>>> main
  templateUrl: './home.component.html',
  styleUrl: './home.component.css'
})
export class HomeComponent {

}
