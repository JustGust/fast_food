import { Component, Input, OnInit } from '@angular/core';
import { OwlOptions } from 'ngx-owl-carousel-o';
import { Category } from 'src/app/interfaces/category';

@Component({
  selector: 'app-carrousel-categories',
  templateUrl: './carrousel-categories.component.html',
  styleUrls: ['./carrousel-categories.component.css']
})
export class CarrouselCategoriesComponent implements OnInit {

  constructor() {}

  @Input() categories: any[] = [];
 

  ngOnInit(): void {
  }

  customOptions: OwlOptions = {
    loop: true,
    mouseDrag: false,
    touchDrag: false,
    pullDrag: false,
    dots: false,
    navSpeed: 600,
    navText: ['&#8249', '&#8250;'],
    responsive: {
     
      1000: {
        items: 4
      }
    },
    nav: true
  }

}
