<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un commentaire</title>
</head>
<body>
    <h2>Ajouter un commentaire</h2>
    <form action="add_comment.php" method="post">
        <input type="hidden" name="post_id" value="<?php echo $postId; ?>">
        <label for="content">Commentaire:</label><br>
        <textarea id="content" name="content" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Ajouter le commentaire">
    </form>
</body>
</html>
