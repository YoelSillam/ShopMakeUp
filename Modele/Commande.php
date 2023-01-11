<?php

require_once 'Modele/Modele.php';

class Commande extends Modele
{
    // public function getCommande($idCommande)
    // {
    //     $sql = 'select produit.libelle, quantite, idCommande from produit inner join commandeProduit on produit.idProduit = commandeProduit.idProduits inner join commande on commandeProduit.idCommabdes = commande.idCommande where idCommande = ?';
    //     $commande = $this->executerRequete($sql, array($idCommande));
    //     return $commande;
    // }
    // public function getCommandes()
    // {
    //     $sql = 'select * from commande';
    //     $commandes = $this->executerRequete($sql);
    //     return $commandes;
    // }
    // public function ajoutCommande()
    // {
    //     $sql = 'insert into commande( statut) values( "en cours")';
    //    // $sql1 = 'insert into commandeProduit(idCommandes, $idProduits) values (?, ?)';
    //     $this->executerRequete($sql);
    //    // $this->executerRequete($sql1, array($idCommande, $idProduit));
    // }
    // public function passerCommande($idCommande)
    // {
    //     $sql = 'update commande set statut = "payée" where idCommande = ?';
    //     $this->executerRequete($sql, array($idCommande));
    // }
}