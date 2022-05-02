import { Injectable } from '@angular/core';

import { HttpClient, HttpHeaders } from "@angular/common/http";
import { Observable, throwError } from "rxjs";
import { catchError } from "rxjs/operators";
import { Table } from "../interfaces/table";
import { environment } from 'src/environments/environment';


@Injectable({
  providedIn: 'root'
})
export class TableService {

  private env: string = '';

  httpOptions = {
  headers: new HttpHeaders({
'content-Type': 'application/json'
  })
  }

  constructor(private _httpClient: HttpClient) {
    this.env = environment.APP_URL;
   }


  getTables(){
    return this._httpClient.get<Table[]>(this.env+'tables')
  }

  getTable( id: any){
    return this._httpClient.get<Table[]>(this.env+'table/' + id)
  }

}
