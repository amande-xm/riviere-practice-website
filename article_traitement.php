<?php require_once 'include/config.php';

$dsn = 'mysql:dbname=p2300677;host=iutbg-lamp.univ-lyon1.fr';
$user = 'p2300677';
$password = '12300677';
try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
echo 'Connexion réussie';

if(isset(($_POST['Titre']), ($_POST['Description']), ($_POST['Contenu']), ($_FILES['Photo']))){
    if ($_FILES['Photo']['error'] == 0) {
        move_uploaded_file(
            $_FILES["Photo"]['tmp_name'],
            __DIR__ . '/art_img/'. date("Y-m-d H:i:s") . '.jpg'
        );
    }
    $url ='/art_img/'. date("Y-m-d H:i:s") . '.jpg';
    $stmt1 = $pdo->prepare("INSERT INTO articles (title, descr, content, image) values (:title, :description, :content, :photo)");
    $stmt1->execute([
        'title' => $_POST['Titre'],
        'description' => $_POST['Description'],
        'content' => $_POST['Contenu'],
        'photo' => $url
    ]);   
}