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
<form action="index.php?action=editCategorie" method="post">
<?php foreach($categories as $categorie):
?>
<input type="text" style="text-align: center;"  class="form-control" name="libelle" placeholder="<?= $categorie['libelleCategorie']?>">

<br>
<input type="text" style="text-align: center;"  class="form-control" name="idCategorie" value="<?= $categorie['idCategorie']?>" readonly="readonly">
<br>
<input type="submit" style="text-align: center;" class="btn btn-primary milieu" value="Valider" >

<?php endforeach;?>
</form>