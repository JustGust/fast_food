import { Component, OnInit } from '@angular/core';

import { TableService } from "../services/table.service";
import { Table } from "../interfaces/table";

@Component({
  selector: 'app-welcome',
  templateUrl: './welcome.component.html',
  styleUrls: ['./welcome.component.css']
})
export class WelcomeComponent implements OnInit {

  myTables: any[] = []; 

  constructor( public _tableService: TableService) { }

  ngOnInit(): void {
    this._tableService.getTables().subscribe((data: Table[])=>{
      this.myTables = data;
    })
  }

}
