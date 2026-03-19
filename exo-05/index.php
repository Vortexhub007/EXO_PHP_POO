<?php
require_once 'classes/Product.php';
require_once 'classes/Cart.php';

// 1. On crée les produits disponibles
$p1 = new Product("Souris Gamer", 45.00);
$p2 = new Product("Tapis de souris XXL", 15.50);
$p3 = new Product("Casque Audio", 89.90);

// 2. On initialise le panier
$myCart = new Cart();

// 3. On ajoute des produits au panier
$myCart->addProduct($p1);
$myCart->addProduct($p2);
$myCart->addProduct($p3);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Panier POO</title>
</head>
<body style="font-family: sans-serif; padding: 20px;">
    <h1>Finaliser votre commande</h1>
    
    <?= $myCart->displayCart(); ?>

    <p><a href="index.php">Continuer mes achats</a></p>
</body>
</html>