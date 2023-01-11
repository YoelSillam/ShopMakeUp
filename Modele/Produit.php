<?php

require_once 'Modele/Modele.php';

class Produit extends Modele{
    public function getProduits()
    {
        $sql = 'select idProduit, libelle, description, ingredient, prix, conseilUtilisation, image from produit';
        $produits = $this->executerRequete($sql);
        return $produits;
    }
   
    public function getProduitss()
    {
        $sql = 'select idProduit, libelle, description, ingredient, prix, conseilUtilisation, image from produit';
        $produits = $this->executerRequete($sql);
        return $produits;
    }
    public function getProduit($idProduit)
    {
        $sql = 'select idProduit, libelle, description, ingredient, prix, conseilUtilisation, image, libelleMarque from produit inner join marque on produit.idMarque = marque.idMarque where idProduit = ?';
        $produit = $this->executerRequete($sql, array($idProduit));
       return $produit;
    }
    public function getProduitModifier($idProduit)
    {
        $sql = 'select idProduit, libelle, description, ingredient, prix, conseilUtilisation, image from produit where idProduit = ?';
        $produit = $this->executerRequete($sql, array($idProduit));
       return $produit;
    }
    public function getProduitFiltre($idCategorie)
    {
        $sql = 'select idProduit, libelle, description, ingredient, prix, conseilUtilisation, image from produit where idCategorie = ?  ';
        $categ = $this->executerRequete($sql, array($idCategorie));
        return $categ;
    }
    public function getCategorieLibelle($libelle)
    {
        $sql = 'select idProduit, libelle, description, ingredient, prix, conseilUtilisation, image, libelleCategorie from produit inner join categories on produit.idCategorie = categories.idCategorie where libelleCategorie = ?';
        $categorie = $this->executerRequete($sql, array($libelle));
        return $categorie;
    }
    public function getMarqueLibelle($libelle)
    {
        $sql = 'select idProduit, libelle, description, ingredient, prix, conseilUtilisation, image from produit inner join marque on produit.idMarque = marque.idMarque where slugMarque = ?';
        $marque = $this->executerRequete($sql, array($libelle));
        return $marque;
    }
    public function getProduitMarque($idMarque)
    {
        $sql = 'select idProduit, libelle, description, ingredient, prix, conseilUtilisation, image from produit  where idMarque = ?  ';
        $marque = $this->executerRequete($sql, array($idMarque));
        return $marque;
    }
    public function getRechercherProduit($libelle)
    {
        $sql = "select idProduit, libelle, description, ingredient, prix, conseilUtilisation, image from produit where libelle like ?";
        $produits = $this->executerRequete($sql, array($libelle.'%'));
        return $produits;
    }

    // public function getRechercheDocVideo($libelle)
    // {
    //     // $sql = "select libelle, description, lien from docVideo where type = 'video' and libelle like '".$libelle."%'";
    //     // $docVideoRecherche = $this->executerRequete($sql);
    //     // return $docVideoRecherche;
    //     $sql = "select libelle, description, lien from docVideo where type = 'video' and libelle like ?";
    //     $docVideoRecherche = $this->executerRequete($sql, array($libelle.'%'));
    //     return $docVideoRecherche;
    // }
    public function modifierProduit($libelle, $description, $ingredient, $prix, $conseilUtilisation, $image, $idProduit)
    {
        $sql = 'update produit set libelle = ?, description = ?, ingredient = ?, prix = ?, conseilUtilisation = ?, image = ? where idProduit = ?';
        $this->executerRequete($sql, array($libelle, $description, $ingredient, $prix, $conseilUtilisation, $image, $idProduit));
    }
    public function insererProduit($libelle, $description, $ingredient, $prix, $conseilUtilisation, $image)
    {
        $sql = 'insert into produit (libelle, description, ingredient, prix, conseilUtilisation, image) values (?,?,?,?,?,?)';
        $this->executerRequete($sql, array($libelle, $description, $ingredient, $prix, $conseilUtilisation, $image));
    }
    public function supprimerProduit($idProduit)
    {
        $sql = 'delete from produit where idProduit = ?';
        $this->executerRequete($sql, array($idProduit));
    }
    
}