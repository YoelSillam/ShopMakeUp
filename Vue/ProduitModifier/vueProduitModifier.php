<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
 .milieu
 {
    align-items: center;
    justify-content: center;
    margin-left: 30%;
    width: 50%;
 }
</style>

<h2>Modifier un produit</h2>
<form action="index.php?action=editProduit" method="post">
<?php foreach($produit as $prod):
?>
<input type="text" style="text-align: center;"  class="form-control" name="libelle" placeholder="<?= $prod['libelle']?>">
<br>
<input type="text" style="text-align: center;"  class="form-control" name="description" placeholder="<?= $prod['description']?>">
<br>
<input type="text" style="text-align: center;"  class="form-control" name="ingredient" placeholder="<?= $prod['ingredient']?>">
<br>
<input type="text" style="text-align: center;"  class="form-control" name="prix" placeholder="<?= $prod['prix']?>">
<br>
<input type="text" style="text-align: center;"  class="form-control" name="conseilUtilisation" placeholder="<?= $prod['conseilUtilisation']?>">
<br>
<input type="file" style="text-align: center;"  class="form-control" name="image" placeholder="<?= $prod['image']?>">
<br>
<input type="text" style="text-align: center;"  class="form-control" name="idProduit" value="<?= $prod['idProduit']?>" readonly="readonly">
<br>
<input type="submit" style="text-align: center;" class="btn btn-primary milieu" value="Valider" >

<?php endforeach;?>
</form>