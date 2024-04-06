import { RouterModule, Routes } from '@angular/router';

import { HomeComponent } from './home/home.component';
import { AboutComponent } from './about/about.component';
import { LoginPageComponent } from './login-page/login-page.component';
import { DashboardComponent } from './etudiant/dashboard/dashboard.component';
import { Component, NgModule } from '@angular/core';
import { HeaderComponent } from './header/header.component';
import { EnseignementComponent } from './etudiant/enseignement/enseignement.component';
import { FeedbackComponent } from './etudiant/feedback/feedback.component';
import { AccueilComponent } from './etudiant/accueil/accueil.component';
import { RegisterPageComponent } from './register-page/register-page.component';
import path from 'path';
import { DashboardEnseignantComponent } from './enseignant/dashboard-enseignant/dashboard-enseignant.component';
import { AccueilEnseignantComponent } from './enseignant/accueil-enseignant/accueil-enseignant.component';
import { EnseignementEnseignantComponent } from './enseignant/enseignement-enseignant/enseignement-enseignant.component';
import { EtudiantEnseignantComponent } from './enseignant/etudiant-enseignant/etudiant-enseignant.component';

export const routes: Routes = [

    {
        path: '',
        redirectTo: 'home',
        pathMatch: 'full'
      },
    {
        
        path: '', component: HeaderComponent,
        children: [
            { path: 'home', component: HomeComponent},
            { path: 'infos', component: AboutComponent},
            { path: 'login', component: LoginPageComponent},
            { path: 'register', component: RegisterPageComponent},
        ]
    },

    { path: 'dashboard', component: DashboardComponent, children: [

        { path: 'accueil',  component: AccueilComponent,},
        { path: 'enseignement',  component: EnseignementComponent},
        { path: 'feedback',  component: FeedbackComponent},
            
    ]},

    { 
        path: 'enseignant', component: DashboardEnseignantComponent , children: [
            {path: 'accueil-enseignant', component: AccueilEnseignantComponent,},
            {path: 'enseignement-enseignant', component:EnseignementEnseignantComponent,},
            {path: 'etudiant-enseignant', component: EtudiantEnseignantComponent,}
        ]
    }


    

];

@NgModule({
    imports: [RouterModule.forRoot(routes)],
    exports: [RouterModule]
  })
  export class AppRoutes { }
