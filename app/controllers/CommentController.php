<?php

require_once 'models/comment.php';

class CommentController {
    
    public function addComment() {
        // Vérifier si le formulaire d'ajout de commentaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer les données du formulaire
            // $postId = $_POST['post_id'];
            // $content = $_POST['content'];

            // Créer un nouveau commentaire
            // $comment = new Comment(null, $postId, $content);

            // Enregistrer le commentaire
            // $comment->save();

            // Redirection après l'ajout du commentaire
            // header('Location: index.php');
        }
    }

    public function deleteComment() {
        // Traitement de la suppression du commentaire
    }

    public function editComment() {
        // Traitement de la modification du commentaire
    }
}

?>
