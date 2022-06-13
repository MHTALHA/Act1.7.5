<?php
require("Carte.php");
require("Sort.php");
require("DamageableInterface.php");

class Monstre extends Carte implements  DamageableInterface {

 
 protected int $ptsVie;
 

 
 public function __construct(int $coutMana,int $nbDegat,int $ptsVie){

        parent::__construct($coutMana,$nbDegat);
        $this->ptsVie=$ptsVie;
    
 }

 public function getPtsVie():int{
   return $this->ptsVie;
   
}
public function getNbDegat():int{

   return $this->nbDegat;
}
// public function minusNbVie($nbDegat):int{

//     return $this->ptsVie-=$nbDegat;
//  }
 
public function  takeDamages(int $n):int{
   if($n<$this->ptsVie){
      return $this->ptsVie-=$n;
   }else {
      return 0;
   }
   
 }

 public function attaquer(DamageableInterface  $monstre){
        
    return $monstre->takeDamages($this->nbDegat);
 }

 

}


 $monstre1 = new Monstre(2,5,10);
 $monstre2 = new Monstre(2,3,6);
 //$sort1 = new Sort(2,6);

 $monstre2->attaquer($monstre1).PHP_EOL;

 print_r(var_dump($monstre1));
 print_r(var_dump($monstre2));