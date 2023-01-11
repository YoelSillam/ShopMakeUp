
<form action="index.php?action=produitCateg" method="post">

<!-- <input type="text" name="idCategorie" placeholder="idCategorie" />  -->

<!-- <input type="text" name="idCategorie" placeholder="idCategorie" > -->
<select name="idCategorie">
<?php foreach($categories as $categorie):

?>

<option  value="<?= $categorie['idCategorie']?>"><?= $categorie['libelleCategorie']?></option>
<?php
endforeach
?>
</select>
<input type="submit" class="btn btn-primary" value="rechercher">
</form>



