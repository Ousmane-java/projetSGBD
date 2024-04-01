import { Routes } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { AboutComponent } from './about/about.component';
import { LoginPageComponent } from './login-page/login-page.component';

export const routes: Routes = [
    { path: '', component: HomeComponent},
    { path: 'infos', component: AboutComponent},
    { path: 'connexion', component: LoginPageComponent},

];
