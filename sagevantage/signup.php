<?php

$conn = new mysqli('localhost', 'root', '', 'db');

        // Récupérer et valider les données du formulaire
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role_id = $_POST['role'];

        // Validation basique
        if (empty($username) || empty($_POST['password']) || !$role_id) {
            throw new Exception("Veuillez remplir tous les champs du formulaire.");
        }else{
            $sql="INSERT INTO users (username, password, role_id) VALUES ('$username', '$password', '$role_id')";
            mysqli_query($conn,$sql);
            echo "Inscription réussie.";
            header("Location: login.html");

        }

    

?>
