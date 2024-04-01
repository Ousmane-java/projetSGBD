import { Routes } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { LoginPageComponent } from './login-page/login-page.component';
import { AboutComponent } from './about/about.component';

export const routes: Routes = [
    { path: '', component: HomeComponent},
    { path: 'connexion', component: LoginPageComponent},
    { path: 'infos', component: AboutComponent},
];
