<h1 style="text-align: center;">Nos Produits</h1>

<div class="row">
<?php 
foreach($marque as $marque):
    ?>
   
    <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
  <img src="image/<?=$marque['image']?>" width="150px" height="250px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $marque['libelle'] ?></h5>
    <p class="card-text"><?= $marque['prix'] ?>€</p>
    <a href="<?= "index.php?action=produitId&id=".$marque['idProduit']?>" class="btn btn-primary">Voir le produit</a>
  </div>
</div>
    </div>
    </div>
<br>
    <?php

endforeach;
?>