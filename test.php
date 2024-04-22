<?php
abstract class employer{
    protected $id;
    protected $nom;
    protected $poste;
    protected $salaire;

public function __construct($id,$nom,$poste){
    $this->id = $id;
    $this->nom = $nom;
    $this->poste = $poste;
}

public function getId(){
    return $this->id;
}

public function getNom(){
    return $this->nom;
}

public function getPoste(){
    return $this->poste;
}

public function setSalaire($salaire){
    $this->salaire = $salaire; 
    
}

abstract public function calculerSalaire();


}

class employerTempsPlein extends employer {
 public function __construct($id,$nom,$poste,$salaireFixe){
     parent::__construct($id,$nom,$poste);
     $this->setSalaire($salaireFixe);
 }   
 public function calculerSalaire(){
    return $this->salaire;
 }
}

class employerTempPartiel extends employer{
    private $tauxHoraire;
    private $horaireTravail;
    
    public function __construct($id,$nom,$poste,$tauxHoraire,$horaireTravail){
        parent::__construct($id,$nom,$poste);
        $this->tauxHoraire = $tauxHoraire;
        $this->horaireTravail = $horaireTravail;
    }
    
    public function calculerSalaire(){
        return $this->tauxHoraire * $this->horaireTravail;
    }
}


class cadre extends employer{
    private $salaireBase;
    private $bonus;
    
    public function __construct($id,$nom,$poste,$salaireBase,$bonus){
        parent::__construct($id,$nom,$poste);
        $this->salaireBase = $salaireBase;
        $this->bonus = $bonus;
    }
    
    public function calculerSalaire(){
        return $this->salaireBase + $this->bonus;
    }
}

$employe1 = new employerTempsPlein(1,"John Doe", "Développeur", 5000);
$employe2 = new employerTempPartiel( 2,"Jane Smith", "Assistant administratif", 15, 20);
$employe3 = new Cadre( 3,"Alice Johnson", "Directeur des ventes", 7000, 2000);

// Test des fonctionnalités en affichant les détails de chaque employé
echo "Nom: " . $employe1->getNom() . ", Salaire: " . $employe1->calculerSalaire() . "\n";
echo "Nom: " . $employe2->getNom() . ", Salaire: " . $employe2->calculerSalaire() . "\n";
echo "Nom: " . $employe3->getNom() . ", Salaire: " . $employe3->calculerSalaire() . "\n";
