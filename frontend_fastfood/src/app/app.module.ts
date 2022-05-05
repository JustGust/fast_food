import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { CarrouselComponent } from './components/carrousel/carrousel.component';
import { WelcomeComponent } from './welcome/welcome.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { CarouselModule } from 'ngx-owl-carousel-o';


import { HttpClientModule } from '@angular/common/http';
import { HomeComponent } from './home/home.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { SearcherComponent } from './components/searcher/searcher.component';
import { CarrouselCategoriesComponent } from './components/carrousel-categories/carrousel-categories.component';
import { CardProductComponent } from './components/card-product/card-product.component';


/* services */

/* end service */

@NgModule({
  declarations: [
    AppComponent,
    CarrouselComponent,
    WelcomeComponent,
    HomeComponent,
    NavbarComponent,
    SearcherComponent,
    CarrouselCategoriesComponent,
    CardProductComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    BrowserAnimationsModule,
    CarouselModule
  ],
  providers: [
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
