import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { CarrouselComponent } from './components/carrousel/carrousel.component';
import { WelcomeComponent } from './welcome/welcome.component';

import { HttpClientModule } from '@angular/common/http';
import { HomeComponent } from './home/home.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { SearcherComponent } from './components/searcher/searcher.component';
import { CarrouselCategoriesComponent } from './components/carrousel-categories/carrousel-categories.component';

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
    CarrouselCategoriesComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule
  ],
  providers: [
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
