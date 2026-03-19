<?php
require_once 'classes/User.php';

// Création de deux profils différents (Instanciation directe)
$user1 = new User('Lina', 'Martin', 'lina@email.fr');
$user2 = new User('Jean', 'Dupont', 'j.dupont@web.com');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP POO - Exercice 1</title>
</head>
<body>
    <h1>Profils Utilisateurs</h1>
    
    <div style="display: flex; gap: 20px;">
        <?php 
            echo $user1->displayProfile(); 
            echo $user2->displayProfile();
        ?>
    </div>
</body>
</html>