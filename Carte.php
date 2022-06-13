<?php 


abstract class Carte {

    protected int $coutMana;
    protected int $nbDegat;

    public function __construct(int $coutMana,int $nbDegat){

        $this->coutMana=$coutMana;
        $this->nbDegat=$nbDegat;
 }


 //abstract public function attaquer(DamageableInterface  $monstre);


}