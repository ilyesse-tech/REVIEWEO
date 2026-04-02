<h2>Mon Profil</h2>
<p>Bienvenue, <?php echo htmlspecialchars($_SESSION['user']['pseudo']); ?> !</p>

<h3>Mes critiques postées</h3>
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
        <?php foreach ($myCritiques as $c): ?>
        <tr>
            <td><?php echo htmlspecialchars($c['titre']); ?></td>
            <td><?php echo $c['note']; ?>/5</td>
            <td><?php echo $c['date_creation']; ?></td>
            <td>
                <a href="index.php?url=editCritique&id=<?php echo $c['id']; ?>" class="btn btn-sm btn-primary">Modifier</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>