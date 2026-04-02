<tbody>
    <?php if (!empty($allReviews)): ?>
        <?php foreach ($allReviews as $review): ?>
            <tr>
                <td><?php echo $review['id']; ?></td>
                <td><?php echo htmlspecialchars($review['comment']); ?></td>
                <td><a href="index.php?action=deleteReview&id=<?php echo $review['id']; ?>">Supprimer</a></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr><td colspan="3">Aucune critique à afficher.</td></tr>
    <?php endif; ?>
</tbody>
    </table>
</section>