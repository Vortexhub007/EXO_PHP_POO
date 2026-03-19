<?php
require_once 'classes/Comment.php';

// Liste de commentaires (certains sont invalides volontairement)
$comments = [
    new Comment("Léo", "Super article, très clair !", "19/03/2026"),
    new Comment(" ", "Commentaire vide", "19/03/2026"), // Invalide (auteur vide)
    new Comment("Sophie", "", "19/03/2026"),           // Invalide (message vide)
    new Comment("Marc", "Merci pour le partage.", "20/03/2026")
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace Commentaires</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 30px; max-width: 800px;">
    <h1>Commentaires des lecteurs</h1>
    
    <div class="comment-section">
        <?php foreach ($comments as $comment): ?>
            <?php if ($comment->isValid()): ?>
                <?= $comment->displayItem(); ?>
            <?php else: ?>
                <p style="color: #e74c3c; font-size: 0.8em;">[Un commentaire non conforme a été masqué]</p>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>