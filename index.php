<?php
spl_autoload_register(function ($class_name) {
    include 'app/' . $class_name . '.php';
});

// Inclure le fichier d'autoloading des classes
require_once 'vendor/autoload.php';

// Inclure d'autres fichiers de configuration, comme la configuration de la base de données

// Définir les routes (vous pouvez utiliser un framework de routage ou écrire votre propre système de routage)
$route = $_GET['route'] ?? '';

switch ($route) {
    case 'register':
        $controller = new UserController();
        $controller->registerForm();
        break;
    case 'login':
        $controller = new UserController();
        $controller->login();
        break;
    // Ajoutez d'autres routes ici...
    default:
        // Rediriger vers une page d'accueil ou afficher une page par défaut
        echo "Page not found";
        break;
}

