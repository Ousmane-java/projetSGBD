import { Component } from '@angular/core';
import { RouterLink, RouterOutlet } from '@angular/router';

@Component({
  selector: 'app-dashboard-enseignant',
  standalone: true,
  imports: [RouterLink, RouterOutlet],
  templateUrl: './dashboard-enseignant.component.html',
  styleUrl: './dashboard-enseignant.component.css'
})
export class DashboardEnseignantComponent {

}
