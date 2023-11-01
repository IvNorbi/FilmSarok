import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './components/pages/home/home.component';
import { HeaderComponent } from './components/partials/header/header.component';
import { MainComponent } from './components/pages/main/main.component';
import { LoginComponent } from './components/pages/login/login.component';
import { RegComponent } from './components/pages/reg/reg.component';

const routes: Routes = [

  {
    title     : 'Főoldal',
    path      : 'Main',
    component : MainComponent
  },

  {
    title     : 'Filmek',
    path      : 'Movies',
    component : HomeComponent
  },

  {
    title     : 'Belépés',
    path      : 'Login',
    component : LoginComponent
  },

  {
    title     : 'Regisztráció',
    path      : 'Register',
    component : RegComponent
  },



  {path:'', component:HomeComponent},
  {path: 'search/:searchTerm', component:HomeComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
