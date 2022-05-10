import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from "@angular/common/http";
import { ProductCost } from "../interfaces/product-cost";
import { environment } from "../../environments/environment";

@Injectable({
  providedIn: 'root'
})
export class ProductCostService {

  env: string = '';

  httpOptions = {
    headers: new HttpHeaders({
      'content-Type': 'application/json',
    }),
  };

  constructor( private _httpClient: HttpClient) {
    this.env = environment.APP_URL;
   }

   getProductCost(idProduct: number){
    return this._httpClient.get<ProductCost[]>(this.env + 'product/cost/' + idProduct);
   }
}
