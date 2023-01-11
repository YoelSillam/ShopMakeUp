<?php
require_once 'Controleur/AutoloadControleur.php';
require_once 'Vue/Vue.php';
class ControleurAccueil
{
    public function __construct()
    {
        session_start();
    }
    public function CGV()
    {
        $CGV = "";
        $vue = new Vue("CGV");
        $vue->generer(array('CGV'=>$CGV));
    }
    public function CGU()
    {
        $CGU =  "";
        $vue = new Vue("CGU");
        $vue->generer(array('CGU'=>$CGU));
    }
    public function accueil()
    {
        $accueil = "";
        $vue = new Vue("Accueil");
        $vue->generer(array('accueil'=>$accueil));
    }
    public function presentation()
    {
        $presentation = "";
        $vue = new Vue("Presentation");
        $vue->generer(array('presentation'=>$presentation));
    }
}