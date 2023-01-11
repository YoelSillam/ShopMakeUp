<a href="index.php?action=marquesAjouter"><input type="submit" class="btn btn-primary" value="Ajouter une marque"></a>
<h1>Liste des marques</h1>
<table>
    <tr>
        <th>Libelle</th>
        <th>Description</th>
        <th>Modifier</th>
        <th>Supprimer</th>
        
    </tr>
    <?php 
foreach($marques as $marque):
    ?>
    <tr>
        <td><?= $marque['libelleMarque']?></td>
        <td><?= $marque['descriptionMarque']?></td>
        <td><a href="<?= "index.php?action=marqueIdModifier&id=".$marque['idMarque']?>"><input type="submit" class="btn btn-primary" value="Modifier"></a></td>
        <form action="index.php?action=deleteMarque" method="post"><td>  <input type="text" name="idMarque" value="<?= $marque['idMarque'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form>
        
    </tr>
    <?php

endforeach;
?>
</table>