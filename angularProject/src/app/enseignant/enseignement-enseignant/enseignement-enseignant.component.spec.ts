import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EnseignementEnseignantComponent } from './enseignement-enseignant.component';

describe('EnseignementEnseignantComponent', () => {
  let component: EnseignementEnseignantComponent;
  let fixture: ComponentFixture<EnseignementEnseignantComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [EnseignementEnseignantComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(EnseignementEnseignantComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
