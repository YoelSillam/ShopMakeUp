<a href="index.php?action=categoriesAjouter"><input type="submit" class="btn btn-primary" value="Ajouter une categorie"></a>
<h1>Liste des categories</h1>
<table>
    <tr>
        <th>Libelle</th>
        <th>Modifier</th>
        <th>Supprimer</th>
        
    </tr>
    <?php 
foreach($categories as $categorie):
    ?>
    <tr>
        <td><?= $categorie['libelleCategorie']?></td>
        <td><a href="<?= "index.php?action=categorieIdModifier&id=".$categorie['idCategorie']?>"><input type="submit" class="btn btn-primary" value="Modifier"></a></td>
        <form action="index.php?action=deleteCategorie" method="post"><td>  <input type="text" name="idCategorie" value="<?= $categorie['idCategorie'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form>
        
    </tr>
    <?php

endforeach;
?>
</table>