import { Component, Input, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { TableService } from 'src/app/services/table.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {

  constructor( private _route: Router, private _TableService: TableService ) { }

  @Input() table: any[] = [];

  ngOnInit(): void {

  }

  singOff(){
  this._TableService.updateStatu(localStorage.getItem('idTable'), 1);
   localStorage.removeItem('idTable');
   localStorage.removeItem('autorize');
   this._route.navigate(['/']);
   
  }

}
