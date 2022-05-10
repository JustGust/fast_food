import { Component, OnInit } from '@angular/core';

import { ActivatedRoute } from '@angular/router';
import { Product } from 'src/app/interfaces/product';
import { ProductService } from '../../services/product.service';
import { ProductCostService } from '../../services/product-cost.service';
import { ProductCost } from 'src/app/interfaces/product-cost';
declare var $: any;

@Component({
  selector: 'app-product-details',
  templateUrl: './product-details.component.html',
  styleUrls: ['./product-details.component.scss'],
})
export class ProductDetailsComponent implements OnInit {
  idTable: any = '';
  product: Product[] = [];
  productCosts: ProductCost[] = [];
  amount: number = 1;
  private idProduct = this._ActivateRoute.snapshot.params['id'];

  constructor(
    private _ActivateRoute: ActivatedRoute,
    private _ProductService: ProductService,
    private _ProductCostService: ProductCostService
  ) {
    this.idTable = localStorage.getItem('idTable');
  }

  ngOnInit(): void {
    this.methodProduct();
    this.methodProductCost();
  }

  methodProduct() {
    try {
      this._ProductService
        .getProduct(this.idProduct)
        .subscribe((data: Product[]) => {
          this.product = data;
        });
    } catch (e) {
      console.log(e);
    }
  }

  methodProductCost() {
    try {
      this._ProductCostService
        .getProductCost(this.idProduct)
        .subscribe((data: ProductCost[]) => {
          this.productCosts = data;
          console.log(this.productCosts);
        });
    } catch (e) {
      console.log(e);
    }
  }

  plusAmount() {
    this.amount = this.amount + 1;
  }
  minusAmount() {
    if (this.amount >= 2) {
      this.amount = this.amount - 1;
    }
  }
}
