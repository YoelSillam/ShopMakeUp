<?php

//require_once 'Modele/Categorie.php';
require_once 'Controleur/AutoloadControleur.php';
//require_once 'Modele/AutoloadModele.php';
require_once 'Vue/Vue.php';

class ControleurCategorie

{

    private $categorie;

    public function __construct()
    {
        $this->categorie = new Categorie();
    }

    public function categorie($libelleCategorie)
    {
        $categorie = $this->categorie->getCateg($libelleCategorie);
        $vue = new Vue("Categorie");
        $vue->generer(array('categorie'=>$categorie));
    }
    public function categories()
    {
        $categories = $this->categorie->getCategs();
        $vue = new Vue("Categories");
        $vue->generer(array('categories'=>$categories));
    }
    public function categoriess()
    {
        $categories = $this->categorie->getCategories();
        $vue = new Vue("CategoriesSalarie");
        $vue->generer(array('categories'=>$categories));
    }
    public function categoriesAjouter()
    {
        $categories = $this->categorie->getCategoriess();
        $vue = new Vue("CategoriesAjouter");
        $vue->generer(array('categories'=>$categories));
    }
    public function categorieIdModifier($idCategorie)
    {
        $categories = $this->categorie->getCateg($idCategorie);
        $vue = new Vue("CategorieModifier");
        $vue->generer(array('categories'=>$categories));
    }
    public function newsCategories($libelle)
    {
        $this->categorie->ajoutCategories($libelle);
        header('Location:index.php?action=categoriess');
    }
    public function editCategorie($libelle, $idCategorie)    
    {
        $this->categorie->modifierCategories($libelle, $idCategorie);
        header('Location:index.php?action=categoriess');
    }
    public function deleteCategorie($idCategorie)
    {
        $this->categorie->supprimerCategorie($idCategorie);
        header('Location:index.php?action=categoriess');
    }
}