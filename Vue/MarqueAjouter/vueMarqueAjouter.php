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



<h2>Ajouter une Marque</h2>
<form action="index.php?action=newsMarques" method="post">

<input type="text" style="text-align: center;"  class="form-control" name="libelle" placeholder="Libelle">
<br>
<input type="text" style="text-align: center;"  class="form-control" name="descriptionMarque" placeholder="descriptionMarque">
<br>
<input type="submit" style="text-align: center;" class="btn btn-primary milieu" value="Valider" >


</form>