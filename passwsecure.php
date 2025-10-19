<?php
session_start();
set_time_limit(0);
$dsn = 'mysql:dbname=p2300677;host=iutbg-lamp.univ-lyon1.fr';
$user = 'p2300677';
$password = '12300677';
try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

$stmt = $pdo->prepare('SELECT password, id FROM users');
$stmt->execute();
$pass = $stmt->fetchAll();

foreach ($pass as $row) {
    $word = password_hash($row["password"], PASSWORD_DEFAULT);
    $text = $pdo->prepare("UPDATE users SET password =:word where id =:row");
    $text->execute([
         'word' => $word,
         'row' => $row["id"],
    ]);
}

// consectetuer@nislQuisquefringilla.com
// XMB37JHA8WE