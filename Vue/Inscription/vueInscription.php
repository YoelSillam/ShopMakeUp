

<style>
    .container {
     align-items: center;
    justify-content: center;
    width: 50%;
 }
</style>

<h2 style="text-align: center;">Ajouter un salarie</h2>
<form action="index.php?action=ajoutInscription" method="post">
    <!-- <input type="text" style="text-align: center;" class="form-control" name="id" placeholder="id" required>
    <br> -->
    <input type="text" style="text-align: center;" class="form-control" name="nom" placeholder="nom" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="prenom" placeholder="prenom" required>
    <br>
    <input type="text" style="text-align: center;" class="form-control" name="mail" placeholder="mail" required>
    <br>
    <!-- <input type="text" style="text-align: center;" class="form-control" name="pole" placeholder="pole" required> -->
    <select name="statut" class="form-select"  id="">
            <option value="écriture">écriture</option>
            <option value="Lecture">Lecture</option>
            <option value="Admin">Admin</option>
    </select>
    <br>
    <input type="password" style="text-align: center;" class="form-control" name="password" placeholder="password" required>
    <br>
    <input type="submit" class="btn btn-primary container" style="margin-left: 25%;" value="Valider">
</form>
