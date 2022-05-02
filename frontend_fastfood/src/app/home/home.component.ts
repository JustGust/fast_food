import { Component, OnInit } from '@angular/core';
import { TableService } from '../services/table.service';
import { ActivatedRoute } from '@angular/router';
import { Table } from '../interfaces/table';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css'],
})
export class HomeComponent implements OnInit {
  tables: Table[] = [];

  constructor(
    private _TableService: TableService,
    private _ActivatedRoute: ActivatedRoute
  ) {}

  async ngOnInit() {
    const idTable = this._ActivatedRoute.snapshot.params['id'];
    try {
      this._TableService
        .getTable(idTable)
        .subscribe((data: Table[]) => {
          this.tables = data;
        });
    } catch (e) {
      console.log(e);
    }
    
    localStorage.setItem("idTable", idTable);

  }
}
