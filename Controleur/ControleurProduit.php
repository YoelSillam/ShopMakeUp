<?php
//require_once 'Modele/Produit.php';
require_once 'Controleur/AutoloadControleur.php';
require_once 'Vue/Vue.php';
class ControleurProduit
{
    private $produit;

    public function __construct()
    {
        $this->produit = new Produit();
    }
    public function produit()
    {
        $produits = $this->produit->getProduits();
        $vue = new Vue("Produit");
        $vue->generer(array('produits'=>$produits));
    }
    public function produits()
    {
        $produits = $this->produit->getProduitss();
        $vue = new Vue("ProduitAjouter");
        $vue->generer(array('produits'=>$produits));
    }
    public function produitSalarie()
    {
        $produits = $this->produit->getProduitss();
        $vue = new Vue("ProduitSalarie");
        $vue->generer(array('produits'=>$produits));
    }
    public function produitCategorie($libelle)
    {
        $categorie = $this->produit->getCategorieLibelle($libelle);
        $vue = new Vue("CategorieProduit");
        $vue->generer(array('categorie'=>$categorie));
    }
    public function produitMarques($libelle)
    {
        $marque = $this->produit->getMarqueLibelle($libelle);
        $vue = new Vue("MarqueProduit");
        $vue->generer(array('marque'=>$marque));
    }
    public function produitId($idProduit)
    {
        $produit = $this->produit->getProduit($idProduit);
        $vue = new Vue("ProduitEntier");
        $vue->generer(array('produit'=>$produit));
    }
    public function produitIdModifier($idProduit)
    {
        $produit = $this->produit->getProduitModifier($idProduit);
        $vue = new Vue("ProduitModifier");
        $vue->generer(array('produit'=>$produit));
    }
    public function produitCateg($idCategorie)
    {
        $categ = $this->produit->getProduitFiltre($idCategorie);
        $vue = new Vue("ProduitCateg");
        $vue->generer(array('categ'=>$categ));
    }
    public function produitMarque($idMarque)
    {
        $marque = $this->produit->getProduitMarque($idMarque);
        $vue = new Vue("ProduitMarque");
        $vue->generer(array('marque'=>$marque));
    }
    public function rechercherProduit($libelle)
    {
        $produits = $this->produit->getRechercherProduit($libelle);
        $vue = new Vue("ProduitResultat");
        $vue->generer(array('produits'=>$produits));

    }
    // public function CGV()
    // {
    //     $CGV = $this->produit->getCGV();
    //     $vue = new Vue("CGV");
    //     $vue->generer(array('CGV'=>$CGV));
    // }
    // public function CGU()
    // {
    //     $CGU = $this->produit->getCGU();
    //     $vue = new Vue("CGU");
    //     $vue->generer(array('CGU'=>$CGU));
    // }


    public function editProduit($libelle, $description, $ingredient, $prix, $conseilUtilisation, $image, $idProduit)    
    {
        $this->produit->modifierProduit($libelle, $description, $ingredient, $prix, $conseilUtilisation, $image, $idProduit);
        header('Location:index.php?action=produitSalarie');
    }
    public function newsProduit($libelle, $description, $ingredient, $prix, $conseilUtilisation, $image)
    {
        $this->produit->insererProduit($libelle, $description, $ingredient, $prix, $conseilUtilisation, $image);
        header('Location:index.php?action=produitSalarie');
    }
    public function deleteProduit($idProduit)
    {
        $this->produit->supprimerProduit($idProduit);
        header('Location:index.php?action=produitSalarie');
    }
}