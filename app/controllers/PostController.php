<?php

require_once 'models/post.php';

class PostController {
    
    public function showPosts() {
        // Charger les publications depuis la base de données
        // $posts = Post::getAll();

        // Afficher les publications en utilisant une vue
        // require 'views/posts.php';
    }

    public function createPost() {
        // Vérifier si le formulaire de création de publication a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer les données du formulaire
            $title = $_POST['title'];
            $content = $_POST['content'];

            // Créer une nouvelle publication
            // $post = new Post(null, $title, $content);

            // Enregistrer la publication
            // $post->save();

            // Redirection après la création de la publication
            // header('Location: index.php');
        }
    }

    public function deletePost() {
        // Traitement de la suppression de la publication
    }

    public function editPost() {
        // Traitement de la modification de la publication
    }
}

?>
