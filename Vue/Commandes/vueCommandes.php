<?php
foreach($commandes as $commande):
    ?>
    <?= $commande['idCommande']?>
    <?= $commande['statut']?>

    <?php
    endforeach;
    ?>