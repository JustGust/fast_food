import { Injectable } from '@angular/core';
import { CanActivate, Router } from '@angular/router';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})

export class HomeAutorizateGuardGuard implements CanActivate {

  constructor( private _route: Router){}

  canActivate(){

    if(!localStorage.getItem('autorize')){
      this._route.navigate(['/']);
      return false;
    } 
  
    return true;
  }
  
}
