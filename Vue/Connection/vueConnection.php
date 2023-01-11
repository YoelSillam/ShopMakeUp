<?php
// if(isset($_SESSION))
// {
//   session_start();
// }
?>
<h1>La connection</h1>

<form action="index.php?action=getAutho" method="post">

<div class="form-floating mb-3">
  <input type="text" class="form-control"  name="mail" >
  <label for="floatingInput">Adresse mail</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
  <label for="floatingPassword">Mot de passe</label>
</div>
<br>
    <input type="submit" style="text-align: center;" name="valider" class="btn btn-primary milieu" value="Valider">

</form>