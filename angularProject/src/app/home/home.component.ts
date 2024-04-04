import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
<<<<<<< HEAD
import { RouterLink, RouterLinkActive, RouterOutlet } from '@angular/router';
=======
import { RouterLink } from '@angular/router';
>>>>>>> 7c2032c0943b6eaa8ff8502e522076eba818042d

@Component({
  selector: 'app-home',
  standalone: true,
<<<<<<< HEAD
  imports: [CommonModule, RouterOutlet, RouterLink, RouterLinkActive],
=======
  imports: [RouterLink],
>>>>>>> 7c2032c0943b6eaa8ff8502e522076eba818042d
  templateUrl: './home.component.html',
  styleUrl: './home.component.css'
})
export class HomeComponent {

}
