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
<form action="index.php?action=editMarque" method="post">
<?php foreach($marques as $marque):
?>
<input type="text" style="text-align: center;"  class="form-control" name="libelle" placeholder="<?= $marque['libelleMarque']?>">

<br>
<input type="text" style="text-align: center;"  class="form-control" name="descriptionMarque" placeholder="<?= $marque['descriptionMarque']?>">

<br>
<input type="text" style="text-align: center;"  class="form-control" name="idMarque" value="<?= $marque['idMarque']?>" readonly="readonly">
<br>
<input type="submit" style="text-align: center;" class="btn btn-primary milieu" value="Valider" >

<?php endforeach;?>
</form>