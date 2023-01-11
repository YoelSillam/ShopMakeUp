<?php
//require_once 'Modele/Commande.php';
require_once 'Controleur/AutoloadControleur.php';
require_once 'Vue/Vue.php';

class ControleurCommande
{
    private $commande;

    public function __construct()
    {
        $this->commande = new Commande();

    }
    public function commandes()
    {
        $commandes = $this->commande->getCommandes();
        $vue = new Vue("Commandes");
        $vue->generer(array("commandes"=>$commandes));
    }
    public function newsCommande()
    {
        $this->commande->ajoutCommande();
        header("location:index.php?action=produit");
    }
}