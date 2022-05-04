import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CarrouselCategoriesComponent } from './carrousel-categories.component';

describe('CarrouselCategoriesComponent', () => {
  let component: CarrouselCategoriesComponent;
  let fixture: ComponentFixture<CarrouselCategoriesComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CarrouselCategoriesComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(CarrouselCategoriesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
