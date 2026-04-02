<h1>Gestion des Critiques (Mode Admin)</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Note</th>
            <th>ID User</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($allCritiques)): ?>
            <?php foreach ($allCritiques as $c): ?>
                <tr>
                    <td><?php echo $c['id']; ?></td>
                    <td><?php echo htmlspecialchars($c['titre']); ?></td>
                    <td><?php echo htmlspecialchars($c['contenu']); ?></td>
                    <td><?php echo $c['note']; ?>/5</td>
                    <td><?php echo $c['id_user']; ?></td>
                    <td>
                       <a href="index.php?url=deleteCritique&id=<?php echo $c['id']; ?>"> [SUPPRIMER] </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Aucune critique à modérer.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<p><a href="index.php?url=home"> <--- Retour au site</a></p>