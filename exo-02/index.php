<?php
require_once 'classes/Product.php';

// Création d'une collection d'objets (Données en dur)
$products = [
    new Product("Cafetière Italienne", 29.99, "Pour un café corsé le matin.", true),
    new Product("Mug en Céramique", 12.50, "Design minimaliste blanc.", true),
    new Product("Sachet de Café 250g", 8.90, "Arabica bio du Pérou.", false),
    new Product("Bouilloire Électrique", 45.00, "Chauffe rapide 1.7L.", true)
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Boutique POO</title>
</head>
<body>
    <h1>Notre Catalogue</h1>
    
    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
        <?php foreach ($products as $product): ?>
            <?= $product->displayCard(); ?>
        <?php endforeach; ?>
    </div>
</body>
</html>