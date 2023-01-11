<?php




//require_once 'Modele/Connection.php';
require_once 'Controleur/AutoloadControleur.php';
require_once 'Vue/Vue.php';

class ControleurConnection

{
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
        //session_start();
    }
    public function cnx1()
    {
        $connections = $this->connection->getConnections();
        $vue = new Vue("Connection");
        $vue->generer(array('connections'=>$connections));
      //  header("location:http://localhost:8888/testCampusMvcCCopieCopieCopieDossier/index.php");
    }
    public function inscription()
    {
        $inscription = $this->connection->getInscriptions();
        $vue = new Vue("Inscription");
        $vue->generer(array('inscription'=>$inscription));
      //  header("location:http://localhost:8888/testCampusMvcCCopieCopieCopieDossier/index.php");
    }
    public function ajoutInscription($nom, $prenom, $mail, $statut, $password)
    {
        $this->connection->ajouterUtilisateur($nom, $prenom, $mail, $statut, $password);
        header("location:index.php?action=produitSalarie");
       // $this->prestataire($idPrestataire);
    }
    public function getAutho($mail, $password)
    {
        $this->connection->getAuthentification($mail, $password);
        
      //  $autho =  $this->connection->getCon($mail, $password);
        $_SESSION["status"] = session_status();
       //  $_SESSION['statut'] == $autho['statut'];
        if($_SESSION['status'] == 2)
            {
                header("location:index.php?action=produitSalarie");
                // session_start();
            }
            else{
                header("location:index.php?action=cnx1");
            }
    }
    public function getDeconnection()
    {
       // session_start();
        // session_unset();
        // session_destroy();
        // $_SESSION = array();

        header("location:index.php?action=cnx1");
        // exit();
    }
}