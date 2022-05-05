import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from "@angular/common/http";
import { Category } from "../interfaces/category";
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class CategoryService {

  private env: string = '';

  httpOptions = {
    headers: new HttpHeaders({
      'content-Type': 'application/json',
    }),
  };

  constructor( private _httpClient: HttpClient) {
    this.env = environment.APP_URL;
   }

   getCategories() {
    return this._httpClient.get<Category[]>(this.env + 'categories');
  }
}
