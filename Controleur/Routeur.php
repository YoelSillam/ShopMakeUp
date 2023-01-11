<?php
// require_once 'Controleur/ControleurProduit.php';
// require_once 'Controleur/ControleurCategorie.php';
// require_once 'Controleur/ControleurMarque.php';
// require_once 'Controleur/ControleurCommande.php';
// require_once 'Controleur/ControleurConnection.php';
// require_once 'Controleur/ControleurPanier.php';
// function autoloaderControleur($controleur) {
//     $controleur = str_replace('\\', '/', $controleur);
//     require_once($controleur . '.php');
// }

// spl_autoload_register('autoloaderControleur');
require_once 'Controleur/AutoloadControleur.php';
require_once 'Vue/Vue.php';
class Routeur

{
    private $ctrlProduit;
    private $ctrlCategorie;
    private $ctrlMarque;
    private $ctrlCommande;
    private $ctrlConnection;
    private $ctrlPanier;
    private $ctrlAccueil;
    public function __construct()
    {
        $this->ctrlProduit = new ControleurProduit();
        $this->ctrlCategorie = new ControleurCategorie();
        $this->ctrlMarque = new ControleurMarque();
        $this->ctrlCommande = new ControleurCommande();
        $this->ctrlConnection = new ControleurConnection();
        $this->ctrlPanier = new ControleurPanier();
        $this->ctrlAccueil = new ControleurAccueil();
    }
    public function routeurRequete()
    {
        try{
            if(isset($_GET['action']))
            {
                if($_GET['action']=='produitId')
                {
                    $idProduit =intval($this->getParametre($_GET, 'id'));
                    if($idProduit != 0)
                    {
                        $this->ctrlProduit->produitId($idProduit);
                    }
                    else{
                        throw new Exception("identifiant de produit non validée");

                    }
                }
              else if($_GET['action']=='categorieIdModifier')
                {
                    $idCategorie =intval($this->getParametre($_GET, 'id'));
                    if($idCategorie != 0)
                    {
                        $this->ctrlCategorie->categorieIdModifier($idCategorie);
                    }
                    else{
                        throw new Exception("identifiant de produit non validée");

                    }
                }
                else if($_GET['action']=='marqueIdModifier')
                {
                    $idMarque =intval($this->getParametre($_GET, 'id'));
                    if($idMarque != 0)
                    {
                        $this->ctrlMarque->marqueIdModifier($idMarque);
                    }
                    else{
                        throw new Exception("identifiant de produit non validée");

                    }
                }
                else if($_GET['action']=='produitIdModifier')
                {
                    $idProduit =intval($this->getParametre($_GET, 'id'));
                    if($idProduit != 0)
                    {
                        $this->ctrlProduit->produitIdModifier($idProduit);
                    }
                    else{
                        throw new Exception("identifiant de produit non validée");

                    }
                }
               else if($_GET['action']=='produitCateg')
                {
                    $idCategorie =intval($this->getParametre($_POST, 'idCategorie'));
                    $this->ctrlProduit->produitCateg($idCategorie);
                }
                else if($_GET['action']=='produitMarque')
                {
                    $idMarque =intval($this->getParametre($_POST, 'idMarque'));
                    $this->ctrlProduit->produitMarque($idMarque); 
                }
                else if($_GET['action'] == 'newsCommande')
                {
                    // $idCommande =intval($this->getParametre($_POST, 'idCommande'));
                    // $idProduit =intval($this->getParametre($_POST, 'idProduit'));
                    // $quantite =intval($this->getParametre($_POST, 'quantite'));
                    $this->ctrlCommande->newsCommande(); 
                }
                else if($_GET['action']=='categories')
                {
                    $this->ctrlCategorie->categories();
                }
                else if($_GET['action']=='produitCategorie')
                {
                    $libelle = $this->getParametre($_GET, 'libelle');
                    $this->ctrlProduit->produitCategorie($libelle);
                }
                else if($_GET['action']=='produitMarques')
                {
                    $libelle = $this->getParametre($_GET, 'libelle');
                    $this->ctrlProduit->produitMarques($libelle);
                }
                else if($_GET['action']=='categoriess')
                {
                    $this->ctrlCategorie->categoriess();
                }
                else if($_GET['action']=='categoriesAjouter')
                {
                    $this->ctrlCategorie->categoriesAjouter();
                }
                else if($_GET['action']=='commandes')
                {
                    $this->ctrlCommande->commandes();
                }
                else if($_GET['action']=='marques')
                {
                    $this->ctrlMarque->marques();
                }
                else if($_GET['action']=='marqueSalarie')
                {
                    $this->ctrlMarque->marqueSalarie();
                }
                else if($_GET['action']=='marquesAjouter')
                {
                    $this->ctrlMarque->marquesAjouter();
                }
                // else if($_GET['action']=='lecture')
                // {
                //     $this->ctrlPanier->lecture();
                // }
                // else if($_GET['action']=='addPanier')
                // {
                    
                //     $itemId = $this->getParametre($_POST, 'name');
                //     $quantity = $this->getParametre($_POST, 'prix');
                //     $this->ctrlPanier->addPanier($itemId, $quantity);
                // }
                // else if($_GET['action']=='update')
                // {
                   
                //         $itemId = $this->getParametre($_POST, 'name');
                //         $quantity = $this->getParametre($_POST, 'prix');
                //     $this->ctrlPanier->update($itemId, $quantity);
                // }
                // else if($_GET['action']=='remove')
                // {
                //     $itemId = $this->getParametre($_POST, 'itemId');
                //     $this->ctrlPanier->remove($itemId);
                // }
               else if($_GET['action'] == 'produit')
                {
                    $this->ctrlProduit->produit();
                }
                else if($_GET['action'] == 'produits')
                {
                    $this->ctrlProduit->produits();
                }
                else if($_GET['action'] == 'produitSalarie')
                {
                    $this->ctrlProduit->produitSalarie();
                }
                else if ($_GET['action']== 'cnx1')
                {
                    
                   // $mail = $this->getParametre($_POST, 'mail');
                    //$password = $this->getParametre($_POST, 'password');
                    $this->ctrlConnection->cnx1();
                }
                else if ($_GET['action']== 'inscription')
                {
                    
                   // $mail = $this->getParametre($_POST, 'mail');
                    //$password = $this->getParametre($_POST, 'password');
                    $this->ctrlConnection->inscription();
                }
                else if($_GET['action'] == 'ajoutInscription')
                {
                    // $idSalarie = $this->getParametre($_POST, 'id');
                    $nom = htmlspecialchars( ($this->getParametre($_POST, 'nom')), ENT_QUOTES);
                    $prenom = htmlspecialchars( ($this->getParametre($_POST, 'prenom')), ENT_QUOTES);
                    $mail = $this->getParametre($_POST, 'mail');
                    $statut = $this->getParametre($_POST, 'statut');
                    $password1 = $this->getParametre($_POST, 'password');
                    $password = hash('sha512', $password1);
                   
                    $this->ctrlConnection->ajoutInscription($nom, $prenom, $mail, $statut, $password);
                }
                else if($_GET['action'] == 'editProduit')
                {
                    $libelle = $this->getParametre($_POST, 'libelle');
                    $description = $this->getParametre($_POST, 'description');
                    $ingredient = $this->getParametre($_POST, 'ingredient');
                    $prix = $this->getParametre($_POST, 'prix');
                    $conseilUtilisation = $this->getParametre($_POST, 'conseilUtilisation');
                    $image = $this->getParametre($_POST, 'image');
                    $idProduit = $this->getParametre($_POST, 'idProduit');
                    $this->ctrlProduit->editProduit($libelle, $description, $ingredient, $prix, $conseilUtilisation, $image, $idProduit);

                }
                else if($_GET['action'] == 'editCategorie')
                {
                    $libelle = $this->getParametre($_POST, 'libelle');
                   
                    $idCategorie = $this->getParametre($_POST, 'idCategorie');
                    $this->ctrlCategorie->editCategorie($libelle, $idCategorie);

                }
                else if($_GET['action'] == 'editMarque')
                {
                    $libelle = $this->getParametre($_POST, 'libelle');
                    $descriptionMarque = $this->getParametre($_POST, 'descriptionMarque');
                    $idMarque = $this->getParametre($_POST, 'idMarque');
                    $this->ctrlMarque->editMarque($libelle, $descriptionMarque,  $idMarque);

                }
                else if($_GET['action'] == 'newsProduit')
                {
                    $libelle = $this->getParametre($_POST, 'libelle');
                    $description = $this->getParametre($_POST, 'description');
                    $ingredient = $this->getParametre($_POST, 'ingredient');
                    $prix = $this->getParametre($_POST, 'prix');
                    $conseilUtilisation = $this->getParametre($_POST, 'conseilUtilisation');
                    $image = $this->getParametre($_POST, 'image');
                    $this->ctrlProduit->newsProduit($libelle, $description, $ingredient, $prix, $conseilUtilisation, $image);

                }
                else if($_GET['action'] == 'newsCategories')
                {
                    $libelle = $this->getParametre($_POST, 'libelle');
                    $this->ctrlCategorie->newsCategories($libelle);

                }

                else if($_GET['action'] == 'newsMarques')
                {
                    $libelle = $this->getParametre($_POST, 'libelle');
                    $descriptionMarque = $this->getParametre($_POST, 'descriptionMarque');
                    $this->ctrlMarque->newsMarques($libelle, $descriptionMarque);

                }
                else if($_GET['action'] == 'deleteProduit')
                {
                    $idProduit = $this->getParametre($_POST, 'idProduit');
                    $this->ctrlProduit->deleteProduit($idProduit);
                }
                else if($_GET['action'] == 'deleteCategorie')
                {
                    $idCategorie = $this->getParametre($_POST, 'idCategorie');
                    $this->ctrlCategorie->deleteCategorie($idCategorie);
                }
                else if($_GET['action'] == 'deleteMarque')
                {
                    $idMarque = $this->getParametre($_POST, 'idMarque');
                    $this->ctrlMarque->deleteMarque($idMarque);
                }
                else if($_GET['action']=='rechercherProduit')
                {
                    $libelle = $this->getParametre($_POST, 'libelle');
                    if(!empty($libelle))
                    {
                        $this->ctrlProduit->rechercherProduit($libelle);
                    }
                    else{
                        throw new Exception("identifiant de sous-theme non validée");

                    }
                }
                else if($_GET['action'] == 'CGV')
                {
                    $this->ctrlAccueil->CGV();
                }
                else if($_GET['action'] == 'CGU')
                {
                    $this->ctrlAccueil->CGU();
                }
                else if($_GET['action'] == 'accueil')
                {
                    $this->ctrlAccueil->accueil();
                }
                else if($_GET['action'] == 'presentation')
                {
                    $this->ctrlAccueil->presentation();
                }

                // else if($_GET['action'] == 'CGV')
                // {
                //     $this->ctrlProduit->CGV();
                // }
                // else if($_GET['action'] == 'CGU')
                // {
                //     $this->ctrlProduit->CGU();
                // }
                else if ($_GET['action'] == 'panier') {
                    // if(!isset($_SESSION)){
                    //     session_start();
                    //   }
                    $this->ctrlPanier->Panier();
                }
                else if($_GET['action'] == 'getAutho')
                {
                    if(!isset($_SESSION)){
                            session_start();
                        }
                    $mail = $this->getParametre($_POST, 'mail');
                    $password = $this->getParametre($_POST, 'password');
                    if(isset($_SESSION['mail']) && isset($_SESSION['password']))
                    {
                        $this->ctrlConnection->getAutho($mail, $password);
                    var_dump($this->ctrlConnection->getAutho($mail, $password));
                
                   // var_dump(session_status());
                }
                else{
                   var_dump( $this->ctrlConnection->getAutho($mail, $password));
                   // var_dump(session_status());
                    //return false;
                    
                }

                }
                else if ($_GET['action']== 'getDeconnection')
                {
                    session_start();
                //     session_destroy();
                //    unset($_SESSION['mail']);
                //    unset($_SESSION['password']);
                //     session_unset();
                //      $_SESSION = array();
                $_SESSION = [];
                session_destroy();
                session_unset();
              //  session_write_close();
               // setcookie(session_name(),'',0,'/');
               //session_regenerate_id(true);
                    $this->ctrlConnection->getDeconnection();
                    var_dump( $this->ctrlConnection->getDeconnection());
                    var_dump(session_status());
                }


                else
                {
                    throw new Exception("action non valide");
                }
            }
            else {
                $this->ctrlAccueil->accueil();

            }
        }
        catch(Exception $e)
        {
            $this->erreur($e->getMessage());
        }
    }
     
    private function erreur($msgErreur) {
     // $vue = new Vue("Erreur", "erreur.php");
      $vue = new Vue("Erreur");
      $vue->generer(array('msgErreur' => $msgErreur));
  }


  private function getParametre($tableau, $nom) {
      if (isset($tableau[$nom])) {
          return $tableau[$nom];
      }
      else
          throw new Exception("Paramètre '$nom' absent");
  }

}

