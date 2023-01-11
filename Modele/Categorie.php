<?php

require_once 'Modele/Modele.php';

class Categorie extends Modele{
    public function getCateg($idCategorie)
    {
        $sql = 'select * from categories where idCategorie =?';
        $categories = $this->executerRequete($sql, array($idCategorie));
        return $categories;
    }
   
    public function getCategs()
    {
        $sql = 'select * from categories ';
        $categories = $this->executerRequete($sql);
        return $categories;
    }
    public function getCategories()
    {
        $sql = 'select * from categories ';
        $categories = $this->executerRequete($sql);
        return $categories;
    }
    public function getCategoriess()
    {
        $sql = 'select * from categories ';
        $categories = $this->executerRequete($sql);
        return $categories;
    }
    public function ajoutCategories($libelle)
    {
        $sql = 'insert into categories (libelleCategorie) values(?)';
        $this->executerRequete($sql, array($libelle));

    }
    public function modifierCategories($libelle, $idCategorie)
    {
        $sql = 'update categories set libelleCategorie = ? where idCategorie = ?';
        $this->executerRequete($sql, array($libelle, $idCategorie));
    }
    public function supprimerCategorie($idCategorie)
    {
        $sql = 'delete from categories where idCategorie = ?';
        $this->executerRequete($sql, array($idCategorie));
    }

} 