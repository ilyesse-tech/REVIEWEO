<table class="table">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Ma note</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($myCritiques)): ?>
            <tr>
                <td colspan="4" class="text-center text-muted">
                    Vous n'avez pas encore posté de critique. 
                    <a href="index.php?url=home">Parcourir les livres</a>
                </td>
            </tr>
        <?php else: ?>
            <?php foreach ($myCritiques as $c): ?>
            <tr>
                <td><?= htmlspecialchars($c['titre']) ?></td>
                <td><?= $c['note'] ?>/5</td>
                <td><?= $c['date_creation'] ?></td>
                <td>
                    <a href="index.php?url=editCritique&id=<?= $c['id'] ?>" class="btn btn-sm btn-primary">Modifier</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>