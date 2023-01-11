<style>
    /* .root {
  display : flex;
  flex-flow: wrap row;
  gap : 30px;
} */
/* 
.container {
  /* position : relative; */
  
  /* width: 300px;
  min-height: calc(3rem + 20px);
  height: calc(3rem + 20px);

  line-height: 1.1rem;
  
  border: 1px solid black;
  border-radius : 6px; */
  
  /* padding : 10px; */
/* } */
/* 
.container.opened {
  height : fit-content;
}

.container > p {
  margin : 0;
  
  height : 100%;
  
  overflow: hidden;
}

.container::before {
  content : "Voir plus";
  position : absolute; */
  /* bottom : 10px;
  right : 10px;
  padding-left : 50px; */
  /* background : linear-gradient(90deg, rgba(255,255,255,0), rgba(255,255,255,100%) 50px);;
}

.container.opened::before {
  content : "Voir moins";
} */ 
/* td
{
    text-overflow : ellipsis
} */

.container0 {
  white-space: normal; 
  width: 100px; 
  overflow: hidden;
  text-overflow: ellipsis;
  /* border: 1px solid #000000; */
}
.container0:hover{
    overflow: visible;

}
.container1 {
  white-space: normal; 
  width: 100px; 
  overflow: hidden;
  text-overflow: ellipsis;
  /* border: 1px solid #000000; */
}
.container1:hover{
    overflow: visible;

}
.container2 {
  white-space: normal; 
  width: 100px; 
  overflow: hidden;
  text-overflow: ellipsis;
  /* border: 1px solid #000000; */
}
.container2:hover{
    overflow: visible;

}
.scroll
{
    border: 1px solid #333333;
    width: 200px;
  height: 200px;
  overflow-y: scroll;
}
</style>
<a href="index.php?action=produits"><input type="submit" class="btn btn-primary" value="Ajouter un produit"></a>
<table>
    <tr>
        <th>Libelle</th>
        <th>Image</th>
        <th>Prix</th>
        <th>Description</th>
        <th>Conseil d'Utilisation</th>
        <th>Ingrédient</th>
        <th>Modifier</th>
        <th>Supprimer</th>
        
    </tr>
    <?php 
foreach($produits as $produit):
    ?>
    <tr>
        <td><?= $produit['libelle']?></td>
        <td><img src="image/<?=$produit['image']?>" width="200px" height="250px" class="card-img-top" alt="..."></td>
        <td><?= $produit['prix'] ?> €</td>
        <td  onclick="handleClickViewMore(this)"><p class="scroll"><?= $produit['description']?></p></td>
        <td  onclick="handleClickViewMore(this)"><p class="scroll"><?= $produit['conseilUtilisation'] ?></p></td>
        <td  onclick="handleClickViewMore(this)"><p class="scroll"><?= $produit['ingredient'] ?></p></td>
        <td><a href="<?= "index.php?action=produitIdModifier&id=".$produit['idProduit']?>"><input type="submit" class="btn btn-primary" value="Modifier"></a></td>
        <form action="index.php?action=deleteProduit" method="post"><td>  <input type="text" name="idProduit" value="<?= $produit['idProduit'] ?>" readonly="readonly" /> <input type="submit" class="btn btn-danger" value="Supprimer" /></td></form>
        
    </tr>
    <?php

endforeach;
?>
</table>
<script>
    const handleClickViewMore = (element) => {
  if(element.classList.contains("opened")){
    element.classList.remove("opened")
  }else{
    element.classList.add("opened")
  }
}
</script>