<!--AFFICHAGE DU TABLEAU DES CRITERES-->

<?php include 'view/layout/header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/grilleEval.css">

<h2>TABLEAU DES CRITERES</h2>
<table>
<!--AJOUT D'UNE LIGNE POUR CHAQUE $c DANS LE TABLEAU $critereseval-->
<?php foreach ($critereseval as $c): ?>
    <tr>
        <?= $c['descLongue'] ?> ---- <?= $c['descCourte'] ?>
    </tr>
<?php endforeach; ?>
</table>

<!-- http://localhost/SaisiesNotesIntranet/view/grilleEval/show.php -->