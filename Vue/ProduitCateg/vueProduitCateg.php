

<div class="row">
<?php 
foreach($categ as $cat):
    ?>
   
    <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
  <img src="image/<?=$cat['image']?>" width="150px" height="250px" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $cat['libelle'] ?></h5>
    <p class="card-text"><?= $cat['prix'] ?>€</p>
    <a href="<?= "index.php?action=produitId&id=".$cat['idProduit']?>" class="btn btn-primary">Voir le produit</a>
  </div>
</div>
    </div>
    </div>
<br>
    <?php

endforeach;
?>