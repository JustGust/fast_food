import { Component, Input, OnInit } from '@angular/core';


@Component({
  selector: 'app-carrousel',
  templateUrl: './carrousel.component.html',
  styleUrls: ['./carrousel.component.css']
})
export class CarrouselComponent implements OnInit {

  @Input() tables: any[] = [];
  authorize: string = 'yes';

  constructor() { 
  }

  ngOnInit(): void {
  }

  authorization(){
   localStorage.setItem('autorize', this.authorize) ;
  }

}
