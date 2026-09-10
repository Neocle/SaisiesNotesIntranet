<!--Affiche le planning-->
<h2>Planning</h2>
<p>Il y a <?= htmlspecialchars(count($billets)) ?> billets(s) achetés(s).
    <a href="index.php?action=type-billet-list">Voir les types de billets achetables</a>
</p>

<table>
    <thead>
    <tr>
        <th>Code</th>
        <th>Status</th>
        <th>Type</th>
        <th>Spectateur</th>
        <th>Festival</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($billets as $billet): ?>
        <tr>
            <td><?= htmlspecialchars($billet['codeBillet']) ?></td>
            <td>
                <span class="status-billet-<?= htmlspecialchars($billet['status']) ?>">
                    <?= htmlspecialchars($billet['status']) ?>
                </span>
            </td>
            <td><?= htmlspecialchars($billet['typeBillet']) ?></td>
            <td><?= htmlspecialchars($billet['idSpectateur']) ?></td>
            <td><?= htmlspecialchars($billet['idFestival']) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>