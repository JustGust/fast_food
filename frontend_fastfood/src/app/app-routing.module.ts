import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { WelcomeComponent } from "./welcome/welcome.component";
import { HomeComponent } from "./home/home.component";
import { TableAsignedGuard } from "./guard/table-asigned.guard";
import { HomeAutorizateGuardGuard } from './guard/home-autorizate-guard.guard';

const routes: Routes = [
  {path: '', component: WelcomeComponent, canActivate: [TableAsignedGuard]},
  {path: 'home/:id', component: HomeComponent, canActivate: [HomeAutorizateGuardGuard]}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
