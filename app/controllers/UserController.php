<?php

require_once 'models/user.php';

class UserController {
    
    public function registerForm() {
        // Afficher le formulaire d'inscription
        require 'views/register_form.php';
    }

    public function register() {
        // Vérifier si le formulaire d'inscription a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer les données du formulaire
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Créer un nouvel utilisateur
            $user = new User(null, $username, $email, $password);

            // Enregistrer l'utilisateur
            $user->save();

            // Redirection après l'inscription
            header('Location: index.php');
        }
    }

    public function login() {
        // Traitement de la connexion de l'utilisateur
    }

    public function logout() {
        // Traitement de la déconnexion de l'utilisateur
    }

    public function editProfile() {
        // Traitement de la modification du profil de l'utilisateur
    }
}

?>
