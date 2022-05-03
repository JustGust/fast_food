import { TestBed } from '@angular/core/testing';

import { HomeAutorizateGuardGuard } from './home-autorizate-guard.guard';

describe('HomeAutorizateGuardGuard', () => {
  let guard: HomeAutorizateGuardGuard;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    guard = TestBed.inject(HomeAutorizateGuardGuard);
  });

  it('should be created', () => {
    expect(guard).toBeTruthy();
  });
});
