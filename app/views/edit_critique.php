<div class="container mt-5">
    <h2>Modifier ma critique</h2>
    <form action="index.php?url=editCritique&id=<?= $critique['id'] ?>" method="POST">
        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" value="<?= htmlspecialchars($critique['titre']) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Contenu</label>
            <textarea name="contenu" class="form-control" rows="5" required><?= htmlspecialchars($critique['contenu']) ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Note (sur 5)</label>
            <input type="number" name="note" class="form-control" min="1" max="5" value="<?= $critique['note'] ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Enregistrer les modifications</button>
        <a href="index.php?url=profile" class="btn btn-secondary">Annuler</a>
    </form>
</div>