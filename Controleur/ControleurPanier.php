<?php
//require_once 'Modele/Panier.php';
require_once 'Controleur/AutoloadControleur.php';
require_once 'Vue/Vue.php';


    class ControleurPanier {


        public function Panier() {
    
            $panier = [];
            $vue = new Vue("Panier");
            $vue->generer($panier);
        }
    
    }
    // Instance du modèle de panier
    // private $model;
    
    // public function __construct() {
    //   $this->model = new Panier();
    // }
    // public function lecture()
    // {
   
    //         // Récupération du modèle
    //        // $model = new CartModel();
    //         // Récupération du contenu du panier
    //         $items = $this->model->getCart();
    //         $vue = new Vue("Panier");
    //         $vue->generer(array('items'=>$items));
    //         // Chargement de la vue
    //       //  require 'views/cart.php';
        



    // //      // Obtenir les éléments du panier
    // //   $items = $this->model->getItems();
    // //   // Obtenir le total du panier
    // //   $total = $this->model->getTotal();
    //    // Charger la vue du panier
    
    // }
    
    // // // Afficher le panier
    // // public function index() {
    // //   // Obtenir les éléments du panier
    // //   $items = $this->model->getItems();
    // //   // Obtenir le total du panier
    // //   $total = $this->model->getTotal();
    // //   // Charger la vue du panier
    // //   require 'views/cart.php';
    // // }
    // public function addPanier($itemId, $quantity)
    // {
    //     // $item = [
    //     //     'name' => $_POST['name'],
    //     //     'price' => $_POST['price']
    //     //   ];
    //       // Ajouter l'article au panier
    //       $this->model->addItem($itemId, $quantity);
    //       //$this->model->addItem($item);
    //       // Rediriger l'utilisateur vers le panier
    //       header('Location:index.php?action=lecture');
    // }
    
    // // // Ajouter un article au panier
    // // public function add() {
    // //   // Récupérer les données de l'article à partir de la requête HTTP
    // //   $item = [
    // //     'name' => $_POST['name'],
    // //     'price' => $_POST['price']
    // //   ];
    // //   // Ajouter l'article au panier
    // //   $this->model->addItem($item);
    // //   // Rediriger l'utilisateur vers le panier
    // //   header('Location: /cart');
    // // }
    //     public function update($itemId, $quantity) {
    //     // Récupération du modèle
    //    // $model = new CartModel();
    //     // Mise à jour de la quantité de l'article dans le panier
    //     $this->model->updateQuantity($itemId, $quantity);
    //     // Redirection vers la page du panier
    //     header('Location:index.php?action=lecture');
    //     }
    //     public function remove($itemId) {
    //         // Récupération du modèle
    //        // $model = new CartModel();
    //         // Suppression de l'article du panier
    //         $this->model->removeItem($itemId);
    //         // Redirection vers la page du panier
    //         header('Location:index.php?action=lecture');
    //         }




    //     // public function removePanier($item)
    //     // {
    //     //     // $item = [
    //     //     //     'name' => $_POST['name'],
    //     //     //     'price' => $_POST['price']
    //     //     //   ];
    //     //       // Supprimer l'article du panier
    //     //       $this->model->removeItem($item);
    //     //       // Rediriger l'utilisateur vers le panier
    //     //       header('Location:index.php?action=lecture');
    //     // }

    
    // // // Supprimer un article du panier
    // // public function remove() {
    // //     // Récupérer les données de l'article à partir de la requête HTTP
    // //     $item = [
    // //       'name' => $_POST['name'],
    // //       'price' => $_POST['price']
    // //     ];
    // //     // Supprimer l'article du panier
    // //     $this->model->removeItem($item);
    // //     // Rediriger l'utilisateur vers le panier
    // //     header('Location: /cart');
    // //   }
    // //   public function reeinitialiser()
    // //   {
    // //     $this->model->clear();
    // //     header('Location:index.php?action=lecture');
    // //   }
    // //   // Réinitialiser le panier
    // //   public function clear() {
    // //     $this->model->clear();
    // //     // Rediriger l'utilisateur vers le panier
    // //     header('Location: /cart');
    // //   }
    
  