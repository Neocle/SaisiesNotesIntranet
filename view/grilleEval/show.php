<!--AFFICHAGE DU TABLEAU DES CRITERES-->

<?php include 'view/layout/header.php'; ?>
<link rel="stylesheet" type="text/css" href="public/css/grilleEval.css">

<h2>TABLEAU DES CRITERES</h2>
<table>
<!--AJOUT D'UNE LIGNE POUR CHAQUE $c DANS LE TABLEAU $critereseval-->
<?php foreach ($critereseval as $c): ?>
    <tr>
        <td>Section</td>
        <td><?= $c['descLongue'] ?></td>
        <td><?= $c['descCourte'] ?></td>
        <td><textarea></textarea></td>
    </tr>
<?php endforeach; ?>
</table>

<div></div>

<!-- http://localhost/SaisiesNotesIntranet/view/grilleEval/show.php -->