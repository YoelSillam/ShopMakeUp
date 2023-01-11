<div class="row">
<?php 
foreach($produits as $produit):
    ?>
   
    <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
  <img src="image/<?=$produit['image']?>" width="200px" height="250px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $produit['libelle'] ?></h5>
    <p class="card-text"><?= $produit['prix'] ?>€</p>
    <a href="<?= "index.php?action=produitId&id=".$produit['idProduit']?>" class="btn btn-primary">Voir le produit</a>
  </div>
</div>
    </div>
    <br>

    </div>

    <?php

endforeach;
?>