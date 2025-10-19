<?php
session_start();

$dsn = 'mysql:dbname=p2300677;host=iutbg-lamp.univ-lyon1.fr';
$user = 'p2300677';
$password = '12300677';
try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}


if (isset($_POST["login"]) && isset($_POST["mdp"])) {
    $stmt = $pdo->prepare("SELECT * FROM users where email=:login");
    $stmt->execute(
        [
            'login' => $_POST["login"],
        ]
    );
    $user = $stmt->fetch();
    if ($user) {
        if (password_verify($_POST["mdp"], $user["password"])) {
            
            $lastname = $user['lastname'];
            $_SESSION["utilisateur"] = $lastname;
        }
    }
}

header("Location: /");
/*
XMB37JHA8WE
consectetuer@nislQuisquefringilla.com
*/
