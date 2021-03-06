import { Component, OnInit } from '@angular/core';
import { TableService } from '../services/table.service';
import { CategoryService } from '../services/category.service';
import { ProductService } from '../services/product.service';
import { ActivatedRoute } from '@angular/router';
import { Table } from '../interfaces/table';
import { Category } from '../interfaces/category';
import { Product } from '../interfaces/product';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css'],
})
export class HomeComponent implements OnInit {
  myTable: Table[] = [];
  myCategories: Category[] = [];
  myProducts: Product[] = [];

  constructor(
    private _TableService: TableService,
    private _CategoryService: CategoryService,
    private _ProductService: ProductService,
    private _ActivatedRoute: ActivatedRoute
  ) {}

  async ngOnInit() {
    this.methodsTables();
    this.methodsCategories();
    this.methodsProducts();
  }

  methodsTables() {
    const idTable = this._ActivatedRoute.snapshot.params['id'];
    try {
      this._TableService.getTable(idTable).subscribe((data: Table[]) => {
        this.myTable = data;
      });
    } catch (e) {
      console.log(e);
    }

    localStorage.setItem('idTable', idTable);
    this._TableService.updateStatu(localStorage.getItem('idTable'), 2);
  }

  methodsCategories() {
    try {
      this._CategoryService.getCategories().subscribe((data: Category[]) => {
        this.myCategories = data;
      });
    } catch (e) {
      console.log(e);
    }
  }

  methodsProducts() {
    try {
      this._ProductService.getProducts().subscribe((data: Product[]) => {
        this.myProducts = data;
      });
    } catch (e) {
      console.log(e);
    }
  }
}
