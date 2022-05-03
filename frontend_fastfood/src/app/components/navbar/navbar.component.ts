import { Component, Input, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {

  constructor( private _route: Router ) { }

  @Input() table: any[] = [];

  ngOnInit(): void {
    
  }

  cerraSesion(){
   localStorage.removeItem('idTable');
   localStorage.removeItem('autorize');
   this._route.navigate(['/']);
   
  }

}
