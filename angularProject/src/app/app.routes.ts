<<<<<<< HEAD
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
        ]
    },

    { path: 'dashboard', component: DashboardComponent, children: [

        { path: 'accueil',  component: AccueilComponent,},
        { path: 'enseignement',  component: EnseignementComponent},
        { path: 'feedback',  component: FeedbackComponent},
            
    ]},

    

];

@NgModule({
    imports: [RouterModule.forRoot(routes)],
    exports: [RouterModule]
  })
  export class AppRoutes { }
=======
import { Routes } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { LoginPageComponent } from './login-page/login-page.component';
import { AboutComponent } from './about/about.component';

export const routes: Routes = [
    { path: '', component: HomeComponent},
    { path: 'connexion', component: LoginPageComponent},
    { path: 'infos', component: AboutComponent},
];
>>>>>>> main
