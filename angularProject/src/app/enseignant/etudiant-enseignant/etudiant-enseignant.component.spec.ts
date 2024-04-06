import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EtudiantEnseignantComponent } from './etudiant-enseignant.component';

describe('EtudiantEnseignantComponent', () => {
  let component: EtudiantEnseignantComponent;
  let fixture: ComponentFixture<EtudiantEnseignantComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [EtudiantEnseignantComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(EtudiantEnseignantComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
