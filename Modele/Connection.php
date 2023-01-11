<?php

require_once 'Modele/Modele.php';

class Connection extends Modele{
    public function getConnections()
    {
        $sql = 'select nom, prenom, mail, password from utilisateur ';
        $connection = $this->executerRequete($sql);
        return $connection;
    }
   
    public function getAuthentification($mail, $password)
    {
        $sql = 'select nom, prenom, mail, password from utilisateur where mail = ? and password = ?;';
        $password1 = hash('sha512', $password);
        $autho = $this->executerRequete($sql, array($mail, $password1));
        if($autho->rowCount() >0)
        {
            echo 'autho trouver';
           // $_SESSION['statut'] = $autho['statut'];
            return $autho;

        //   $auth =  $autho['statut'] == 'admin';
            
        }
        else
        {
            session_destroy();
            session_unset();
            echo ' utilisateur && password introuvable ';
        }
    }
    public function getInscriptions()
    {
        $sql = 'select nom, prenom, mail, password from utilisateur ';
        $inscription = $this->executerRequete($sql);
        return $inscription;
    }
    public function ajouterUtilisateur($nom, $prenom, $mail, $statut, $password)
    {
        $sql = 'insert into utilisateur(nom, prenom, mail, statut, password) values(?,?,?,?,?)';
        $this->executerRequete($sql, array($nom, $prenom, $mail, $statut, $password));
    }

}

