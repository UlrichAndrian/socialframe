<?php

class User {
    private $id;
    private $username;
    private $email;
    private $password;
    
    public function __construct($id, $username, $email, $password) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    // Getters and setters
    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function save() {
        // Connexion à la base de données (à remplacer par vos propres informations de connexion)
        $connection = mysqli_connect("localhost", "username", "password", "nom_de_la_base_de_données");
    
        // Vérifier la connexion
        if (!$connection) {
            die("Échec de la connexion à la base de données: " . mysqli_connect_error());
        }
    
        // Échapper les données pour éviter les injections SQL
        $username = mysqli_real_escape_string($connection, $this->username);
        $email = mysqli_real_escape_string($connection, $this->email);
        $password = mysqli_real_escape_string($connection, $this->password);
    
        // Requête d'insertion
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    
        // Exécution de la requête
        if (mysqli_query($connection, $query)) {
            echo "Utilisateur enregistré avec succès.";
        } else {
            echo "Erreur lors de l'enregistrement de l'utilisateur: " . mysqli_error($connection);
        }
    
        // Fermeture de la connexion
        mysqli_close($connection);
    }
    
    public static function loadById($id) {
        // Connexion à la base de données (à remplacer par vos propres informations de connexion)
        $connection = mysqli_connect("localhost", "username", "password", "nom_de_la_base_de_données");
    
        // Vérifier la connexion
        if (!$connection) {
            die("Échec de la connexion à la base de données: " . mysqli_connect_error());
        }
    
        // Échapper l'ID pour éviter les injections SQL
        $id = mysqli_real_escape_string($connection, $id);
    
        // Requête de sélection
        $query = "SELECT * FROM users WHERE id = $id";
    
        // Exécution de la requête
        $result = mysqli_query($connection, $query);
    
        // Vérifier s'il y a des résultats
        if (mysqli_num_rows($result) > 0) {
            // Récupérer la première ligne de résultat
            $row = mysqli_fetch_assoc($result);
    
            // Créer et retourner un objet User
            $user = new User($row['id'], $row['username'], $row['email'], $row['password']);
            return $user;
        } else {
            echo "Aucun utilisateur trouvé avec cet ID.";
        }
    
        // Fermeture de la connexion
        mysqli_close($connection);
    }
    
    // Méthode pour envoyer une demande d'ami à un autre utilisateur
    public function sendFriendRequest($friendUserId) {
        // Code pour envoyer une demande d'ami à l'utilisateur spécifié
        // Exemple :
        // INSERT INTO friend_requests (sender_id, receiver_id) VALUES (:sender_id, :receiver_id)
    }

    // Méthode pour accepter une demande d'ami
    public function acceptFriendRequest($friendUserId) {
        // Code pour accepter une demande d'ami de l'utilisateur spécifié
        // Exemple :
        // DELETE FROM friend_requests WHERE sender_id = :sender_id AND receiver_id = :receiver_id
        // INSERT INTO friendships (user1_id, user2_id) VALUES (:user1_id, :user2_id)
    }

    // Méthode pour annuler une demande d'ami ou retirer un ami
    public function cancelFriendRequest($friendUserId) {
        // Code pour annuler une demande d'ami ou retirer un ami de la liste d'amis
        // Exemple :
        // DELETE FROM friend_requests WHERE sender_id = :sender_id AND receiver_id = :receiver_id
        // DELETE FROM friendships WHERE (user1_id = :user1_id AND user2_id = :user2_id) OR (user1_id = :user2_id AND user2_id = :user1_id)
    }

    // Méthode pour récupérer la liste des amis de l'utilisateur
    public function getFriends() {
        // Code pour récupérer la liste des amis de l'utilisateur depuis la base de données
        // Exemple :
        // SELECT * FROM users INNER JOIN friendships ON users.id = friendships.user1_id WHERE friendships.user2_id = :user_id
    }

    // Méthode pour s'abonner à un autre utilisateur
    public function subscribeToUser($userId) {
        // Code pour s'abonner à l'utilisateur spécifié
        // Exemple :
        // INSERT INTO subscriptions (subscriber_id, user_id) VALUES (:subscriber_id, :user_id)
    }

    // Méthode pour se désabonner d'un utilisateur
    public function unsubscribeFromUser($userId) {
        // Code pour se désabonner de l'utilisateur spécifié
        // Exemple :
        // DELETE FROM subscriptions WHERE subscriber_id = :subscriber_id AND user_id = :user_id
    }

    // Méthode pour récupérer la liste des utilisateurs auxquels l'utilisateur est abonné
    public function getSubscriptions() {
        // Code pour récupérer la liste des utilisateurs auxquels l'utilisateur est abonné depuis la base de données
        // Exemple :
        // SELECT * FROM users INNER JOIN subscriptions ON users.id = subscriptions.user_id WHERE subscriptions.subscriber_id = :user_id
    }
    
    // Other methods such as delete, update, etc. can be added here
}

?>
