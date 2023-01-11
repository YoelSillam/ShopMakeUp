<?php
require_once 'Modele/Modele.php';
class Panier extends Modele

{
    // // Les éléments du panier
  //   // private $items = [];
  //   // // Total du panier
  //   // private $total = 0;
  //    // Fonction pour ajouter un article au panier
  // public function addItem($itemId, $quantity) {
  //   // Récupération du panier depuis la session
  //   $cart = $_SESSION['panier'] ?? array();
  //   // Si l'article est déjà dans le panier, on met à jour la quantité
  //   if (isset($cart[$itemId])) {
  //     $cart[$itemId] += $quantity;
  //   } else {
  //     // Sinon, on ajoute l'article au panier
  //     $cart[$itemId] = $quantity;
  //   }
  //   // Enregistrement du panier dans la session
  //   $_SESSION['panier'] = $cart;
  // }

  //    // Fonction pour mettre à jour la quantité d'un article dans le panier
  // public function updateQuantity($itemId, $quantity) {
  //   // Récupération du panier depuis la session
  //   $cart = $_SESSION['panier'] ?? array();
  //   // Mise à jour de la quantité de l'article
  //   $cart[$itemId] = $quantity;
  //   // Enregistrement du panier dans la session
  //   $_SESSION['panier'] = $cart;
  // }
  //   public function getCart() {
  //       // Récupération du panier depuis la session
  //       $cart = $_SESSION['panier'] ?? array();
  //       // Récupération des détails des articles depuis la base de données
  //       $items = array();
  //       foreach ($cart as $itemId => $quantity) {
  //         // Requête SQL pour récupérer les détails de l'article
  //         $query = "SELECT * FROM panier WHERE idPanier = ?";
  //         $stmt = $this->db->prepare($query);
  //         $stmt->bind_param('i', $itemId);
  //         $stmt->execute();
  //         $result = $stmt->get_result();
  //         $items[] = $result->fetch_assoc();
  //       }
  //       return $items;
  //     }
  //     public function removeItem($itemId) {
  //       // Récupération du panier depuis la session
  //       $cart = $_SESSION['panier'] ?? array();
  //       // Suppression de l'article du panier
  //       unset($cart[$itemId]);
  //       // Enregistrement du panier dans la session
  //       $_SESSION['panier'] = $cart;
  //     }
    
    // // Ajouter un article au panier
    // public function addItem($nom, $prix) {
    //     $sql = 'insert into panier(nom, prix) values (?,?)';
    //     $this->executerRequete($sql, array($nom, $prix));
    // //   $this->items[] = $item;
    //   $this->total += $item['prix'];
    // }
    
    // // Supprimer un article du panier
    // public function removeItem($idPanier) {

    //     $sql = 'delete from panier where idPanier = ?';
    //     $this->executerRequete($sql, array($idPanier));
    // //   // Trouver l'index de l'article à supprimer
    // //   $index = array_search($item, $this->items);
    // //   // Si l'article est trouvé, supprimer l'article et mettre à jour le total
    // //   if($index !== false) {
    // //     unset($this->items[$index]);
    // //     $this->total -= $item['prix'];
    // //   }
    // }
    
    // // Réinitialiser le panier
    // public function clear() {
    //   $this->items = [];
    //   $this->total = 0;
    // }
    
    // // Obtenir les éléments du panier
    // public function getItems() {
    //   return $this->items;
    // }
    
    // // Obtenir le total du panier
    // public function getTotal() {
    //   return $this->total;
    // }
  }
  