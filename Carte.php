<?php 


abstract class Carte {

    protected int $coutMana;
    protected int $nbDegat;

    public function __construct(int $coutMana,int $nbDegat){

        $this->coutMana=$coutMana;
        $this->nbDegat=$nbDegat;
 }

 public function getCoutMana(){
        return $this->coutMana;
 }
 public function getPtsDegats(){
    return $this->nbDegat;
}
 abstract public function attaquer(DamageableInterface  $monstre);


}