
<form action="index.php?action=produitMarque" method="post">

<!-- <input type="text" name="idCategorie" placeholder="idCategorie" />  -->

<!-- <input type="text" name="idCategorie" placeholder="idCategorie" > -->
<select name="idMarque">
<?php foreach($marques as $marque):

?>

<option  value="<?= $marque['idMarque']?>"><?= $marque['libelleMarque']?></option>
<?php
endforeach
?>
</select>
<input type="submit" class="btn btn-primary" value="rechercher">
</form>



