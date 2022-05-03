import { Injectable } from '@angular/core';
import { CanActivate, Router } from '@angular/router';

@Injectable({
  providedIn: 'root',
})
export class TableAsignedGuard implements CanActivate {
  constructor(private _router: Router) {}

  canActivate(): boolean {
    if (localStorage.getItem('idTable')) {
      this._router.navigate(['home/' + localStorage.getItem('idTable')]);
      return true;
    } else {
      return true;
    }
  }
}
