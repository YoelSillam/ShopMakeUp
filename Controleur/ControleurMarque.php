<?php

//require_once 'Modele/Marque.php';
require_once 'Controleur/AutoloadControleur.php';
require_once 'Vue/Vue.php';

class ControleurMarque
{
    private $marque;

    public function __construct()
    {
        $this->marque = new Marque();
    }
    public function marques()
    {
        $marques = $this->marque->getMarques();
        $vue = new Vue("Marques");
        $vue->generer(array('marques'=>$marques));
    }
    public function marqueSalarie()
    {
        $marques = $this->marque->getMarquess();
        $vue = new Vue("MarqueSalarie");
        $vue->generer(array('marques'=>$marques));
    }
    public function marquesAjouter()
    {
        $marques = $this->marque->getMarquesss();
        $vue = new Vue("MarqueAjouter");
        $vue->generer(array('marques'=>$marques));
    }
    public function marqueIdModifier($idMarque)
    {
        $marques = $this->marque->getMarque($idMarque);
        $vue = new Vue("MarqueModifier");
        $vue->generer(array('marques'=>$marques));
    }
    public function newsMarques($libelle, $descriptionMarque)
    {
        $this->marque->ajoutMarques($libelle, $descriptionMarque);
        header('Location:index.php?action=marqueSalarie');
    }
    public function editMarque($libelle, $descriptionMarque,  $idMarque)    
    {
        $this->marque->modifierMarques($libelle, $descriptionMarque, $idMarque);
        header('Location:index.php?action=marqueSalarie');
    }
    public function deleteMarque($idMarque)
    {
        $this->marque->supprimerMarque($idMarque);
        header('Location:index.php?action=marqueSalarie');
    }
}