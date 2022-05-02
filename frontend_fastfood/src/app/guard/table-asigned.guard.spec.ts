import { TestBed } from '@angular/core/testing';

import { TableAsignedGuard } from './table-asigned.guard';

describe('TableAsignedGuard', () => {
  let guard: TableAsignedGuard;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    guard = TestBed.inject(TableAsignedGuard);
  });

  it('should be created', () => {
    expect(guard).toBeTruthy();
  });
});
