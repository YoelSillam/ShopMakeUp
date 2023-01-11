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



<h2>Ajouter un produit</h2>
<form action="index.php?action=newsProduit" method="post">

<input type="text" style="text-align: center;"  class="form-control" name="libelle" placeholder="Libelle">
<br>
<input type="text" style="text-align: center;"  class="form-control" name="description" placeholder="Description">
<br>
<input type="text" style="text-align: center;"  class="form-control" name="ingredient" placeholder="Ingrédient">
<br>
<input type="text" style="text-align: center;"  class="form-control" name="prix" placeholder="Prix">
<br>
<input type="text" style="text-align: center;"  class="form-control" name="conseilUtilisation" placeholder="Conseil d'utilisation">
<br>
<input type="file" style="text-align: center;"  class="form-control" name="image" placeholder="Image">
<br>
<input type="submit" style="text-align: center;" class="btn btn-primary milieu" value="Valider" >


</form>