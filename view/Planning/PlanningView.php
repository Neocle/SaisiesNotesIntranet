<!--Affiche le planning-->
<h2>Planning</h2>
<table>
    <thead>
    <tr>
        <th>Date</th>
        <th>Horraire</th>
        <th>Salles</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach (isset($plannings) as $planning): ?>
        <tr>
            <td><?= $planning['heure'] ?></td>
            <td><?= $planning['salle'] ?></td>
            <td><?= $planning['professeur_1'] ?></td>
            <td><?= $planning['professeur_2'] ?></td>
            <td><?= $planning['eleve'] ?></td>
            <td><?= $planning['entreprise'] ?></td>
            <td><?= $planning['niveau'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>