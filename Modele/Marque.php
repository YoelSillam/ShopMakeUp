<?php
require_once 'Modele/Modele.php';

class Marque extends Modele
{
    public function getMarques()
    {
        $sql = 'select * from marque';
        $marques = $this->executerRequete($sql);
        return $marques;
    }

    public function getMarquess()
    {
        $sql = 'select * from marque ';
        $marques = $this->executerRequete($sql);
        return $marques;
    }
    public function getMarquesss()
    {
        $sql = 'select * from marque ';
        $marques = $this->executerRequete($sql);
        return $marques;
    }
    public function getMarque($idMarque)
    {
        $sql = 'select * from marque where idMarque =?';
        $marques = $this->executerRequete($sql, array($idMarque));
        return $marques;
    }
    public function ajoutMarques($libelle, $descriptionMarque)
    {
        $sql = 'insert into marque (libelleMarque, descriptionMarque) values(?, ?)';
        $this->executerRequete($sql, array($libelle, $descriptionMarque));

    }
    public function modifierMarques($libelle, $descriptionMarque, $idMarque)
    {
        $sql = 'update marque set libelleMarque = ?, descriptionMarque = ? where idMarque = ?';
        $this->executerRequete($sql, array($libelle, $descriptionMarque, $idMarque));
    }
    public function supprimerMarque($idMarque)
    {
        $sql = 'delete from marque where idMarque = ?';
        $this->executerRequete($sql, array($idMarque));
    }
}