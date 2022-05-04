import { Injectable } from '@angular/core';

import { HttpClient, HttpHeaders } from '@angular/common/http';
import { observable, Observable, throwError } from 'rxjs';
import { catchError } from 'rxjs/operators';
import { Table } from '../interfaces/table';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root',
})
export class TableService {
  private env: string = '';

  httpOptions = {
    headers: new HttpHeaders({
      'content-Type': 'application/json',
    }),
  };

  constructor(private _httpClient: HttpClient) {
    this.env = environment.APP_URL;
  }

  getTables() {
    return this._httpClient.get<Table[]>(this.env + 'tables');
  }

  getTable(id: any) {
    return this._httpClient.get<Table[]>(this.env + 'table/' + id);
  }

  updateStatu(id: any, id_statu: number) {
    return this._httpClient.put<any>(this.env + 'table/update/' + id, {"id_statu": id_statu}, this.httpOptions).subscribe(data =>{
      console.log(data);
    },
    error => {
      console.log('error', error);
    }
    
    );
  }
}
