<?php
require_once 'classes/Article.php';

// Simulation de données provenant d'une source externe
$rawArticles = [
    [
        'title' => 'Découvrir la POO en PHP',
        'content' => 'La programmation orientée objet est un paradigme de programmation basé sur le concept d\'objets, qui peuvent contenir des données et du code. C\'est essentiel pour structurer de grosses applications web.',
        'date' => '15/03/2026'
    ],
    [
        'title' => 'Pourquoi choisir le Web ?',
        'content' => 'Le développement web offre des opportunités incroyables. Entre le front-end, le back-end et le design, chaque développeur peut trouver sa place et s\'épanouir dans des projets variés.',
        'date' => '18/03/2026'
    ]
];

// On transforme le tableau associatif en tableau d'objets
$articles = [];
foreach ($rawArticles as $data) {
    $articles[] = new Article($data['title'], $data['content'], $data['date']);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Blog POO</title>
</head>
<body style="font-family: sans-serif; padding: 40px;">
    <h1>Derniers Articles</h1>
    
    <section>
        <?php foreach ($articles as $article): ?>
            <?= $article->displayCard(); ?>
        <?php endforeach; ?>
    </section>
</body>
</html>