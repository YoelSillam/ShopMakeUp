

<style>
    .readMore .addText {
    display: none;
}
/* .readMore
{
    width: 50%;
    height: 50%;
    float: right;
    margin-top: 10%;
} */
.prx
{
    width: 50%;
    height: 50%;
    float: right;
    margin-top: 10%;
}
.btnPanier
{
    text-align: center;
    margin-left:35%;

}
</style>

<?php foreach($produit as $prod):

?>
<h3 style="text-align: center;"><?= $prod['libelle']?></h3>
<img src="image/<?=$prod['image']?>" width="40%" height="55%" >




<div class="prx">
<p class="readMore" id="readMore"> <?= $prod['description'] ?></p>
<br>
<h3 style="text-align: center;" ><b><?= $prod['prix'] ?>€</b></h3>
</div>
<?php

$desc = str_replace("'", "\'", $prod['description']);

?>

<br>
<br>
<br>
<br>
<br>
<br>

<button type="button"   onclick="addToCart(<?=$prod['idProduit']?>,'<?=$prod['libelle']?>', '<?=$desc?>',<?=$prod['prix']?>, '<?=$prod['image']?>' )" class="btn btn-primary btnPanier">ajouter au panier</button>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<nav>
<div class="card text-center" id="info">
  <div class="card-header">
  <div class="nav nav-tabs card-header-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Ingrédient</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">conseilUtilisation</button>

  </div>
  </div>
</div>
 

</nav>
<div class="card text-center">
<div class="card-body ">
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active card-text" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0"><?= $prod['description'] ?></div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0"><?= $prod['ingredient'] ?></div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0"><?= $prod['conseilUtilisation'] ?></div>

</div>
</div>
</div>





<!-- <div class="btn-group" role="group" aria-label="Basic outlined example">
 <a href="#readMore"> <button type="button" class="btn btn-outline-primary">Left</button></a>
  <button type="button" class="btn btn-outline-primary">Middle</button>
  <button type="button" class="btn btn-outline-primary">Right</button>
</div>
<div class="read">


</div> -->
<?php
endforeach;
?>
<script>


  $(document).ready(function() {
    var max = 220;
    $(".readMore").each(function() {
        var str = $(this).text();
        if ($.trim(str).length > max) {
            var subStr = str.substring(0, max);
            var hiddenStr = str.substring(max, $.trim(str).length);
            $(this).empty().html(subStr);
            $(this).append(' <a href="#info" class="lire-plus" id="lire-plus">en savoir plus</a>');
            $(this).append('<span class="addText">' + hiddenStr + '</span>');
        }
    });
    $(".lire-plus").click(function() {
        $(this).siblings(".addText").contents().unwrap();
        $(this).remove();
    });
});




function addToCart(articleId,nom,desc,prix,img){
 
        $.ajax({
            url: 'Fonctions/add-produit.php',
            type: 'POST',
            data: {
                articleId: articleId,
                nom : nom,
                desc : desc,
                prix : prix,
                img: img
            },
            success: function(response){
                console.log(response.quantiteMax)
                window.location.reload();
                    $('.count').text(response.quantiteMax);

            }
        });
    }

    

</script>
<!-- Anti-cernes couvrant longue tenue par Yves Saint Laurent.Dissimule instantanément les cernes et camoufle les imperfections.

L’ÉCLAT INSTANTANÉ DE 8 HEURES DE SOMMEIL EN UN CLIC
Le stylo iconique Touche Éclat se décline désormais en une formule correcteur anti-cernes alliant la lumière originelle de Touche Éclat à la haute couvrance pour un teint naturellement unifié et un regard parfaitement reposé. 8 femmes sur 10 parlent d’un produit qui réduit les signes de fatigue.
Addict d’un teint naturel et lumineux, YSL vous offre une routine teint complète avec le fond de teint Touche Éclat Le Teint, l’illuminateur iconique Touche Éclat, et le nouveau correcteur anti-cernes Touche Éclat High Cover.

LE NOUVEAU STYLO CORRECTEUR ANTI-CERNES LUMINEUX ET HAUTE COUVRANCE PAR YSL
Hautement concentré en pigments, Touche Éclat High Cover dissimule instantanément les cernes et camoufle les imperfections (rougeurs, taches de dépigmentation, cicatrices d’acné).
Sa formule longue tenue enrichie en pigments réflecteurs de lumière révèle un teint naturel, parfaitement unifié et un regard frais et lumineux tout au long de la journée.
Grâce à sa texture fluide, souple et ultra-légère, cet anti-cernes fusionne avec la peau sans marquer les ridules et assure un confort optimal pour tous types de peaux, même les plus sèches.

LES SECRETS D’UNE FORMULE BOOSTER ANTI-FATIGUE
Un complexe anti-fatigue puissant : composé de Ruscus et de Vitamine E anti-oxydants et enrichi en caféine pour stimuler la microcirculation et lutter durablement contre les signes de fatigue.
Une formule apaisante : infusée en Calendula provenant des jardins de l’Ourika YSL Beauté au Maroc pour apaiser la peau délicate du contour de l'œil. -->


<!-- Diorskin Forever Undercover est un fond de teint ultra-fluide et haute couvrance, à la tenue 24 h.

Experts en matière de types de peau et de tenue, les laboratoires Dior réinventent la correction extrême avec Diorskin Forever Undercover. Conçu dans une large gamme de teintes, des plus claires aux plus foncées, ce fond de teint fluide est capable de fusionner avec différentes tonalités de peau pour un fini mat.

Pour Peter Philips, Directeur de la Création et de l’Image du Maquillage Dior, le néo-camouflage, permis par Diorskin Forever Undercover, définit une très haute couvrance, résultat d'une texture fluide à haute concentration en pigments - pour un produit qui ne se sent pas et ne se voit pas.

 Test instrumental sur 20 femmes.
Chez Dior -->
<!-- Diorskin Forever Undercover est un fond de teint ultra-fluide et haute couvrance, à la tenue 24 h.

Experts en matière de types de peau et de tenue, les laboratoires Dior réinventent la correction extrême** avec Diorskin Forever Undercover. Conçu dans une large gamme de teintes, des plus claires aux plus foncées, ce fond de teint fluide est capable de fusionner avec différentes tonalités de peau pour un fini mat.

Pour Peter Philips, Directeur de la Création et de l’Image du Maquillage Dior, le néo-camouflage, permis par Diorskin Forever Undercover, définit une très haute couvrance, résultat d'une texture fluide à haute concentration en pigments - pour un produit qui ne se sent pas et ne se voit pas.

 Test instrumental sur 20 femmes.
Chez Dior -->
<!-- Comment appliquer votre mascara ?
1. Pour recourber vos cils, commencez l'application à la racine, au coin externe de l'œil.
2. Posez la brosse à la base des cils puis étirez simultanément vers le haut et vers l’extérieur pour bien les séparer en effectuant un mouvement de zigzag.
3. Pour les cils inférieurs et intérieurs, n’utilisez que la pointe de l’applicateur et maquillez les cils un par un.

L’astuce de notre make-up artist
Pour réveiller votre regard, pensez à appliquer Touche Éclat Le Stylo sur le coin de l’œil et l’arcade sourcilière.



Les conseils de Peter Philips :
Ultra-glissante, la texture ne se fixe pas instantanément et peut se travailler aux doigts. On commence par tapoter sur les zones qui nécessitent de la correction, puis on estompe en lissage. Si on cherche une couvrance uniforme sur l’ensemble du visage, on peut utiliser un pinceau fond de teint. La tenue de 24 heures* dispense de faire des retouches en cours de journée. 

 Test instrumental sur 20 femmes. -->