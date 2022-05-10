import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from "@angular/common/http";
import { Product } from "../interfaces/product";
import { environment } from "../../environments/environment";

@Injectable({
  providedIn: 'root'
})
export class ProductService {

  env: string = '';

  httpOptions = {
    headers: new HttpHeaders({
      'content-Type': 'application/json',
    }),
  };

  constructor( private _httpClient: HttpClient) {
    this.env = environment.APP_URL;
   }

   getProducts(){
     return this._httpClient.get<Product[]>( this.env + 'products');
   }

   getProduct(id: number){
    return this._httpClient.get<Product[]>( this.env + 'product/' + id);
  }

}
