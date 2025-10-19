<?php require_once 'include/config.php';

$dsn = 'mysql:dbname=p2300677;host=iutbg-lamp.univ-lyon1.fr';
$user = 'p2300677';
$password = '12300677';
try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Les paysages | Informations </title>
</head>

<body>
    <header>
        <?php include_once 'modules/navbar.php' ?>
        <h1> Informations de contact</h1>
    </header>
    <div id="content">

        <?php
        $table = array();
            $stmt1 = $pdo->prepare("SELECT * from articles where id=:id");
            $stmt1->execute([
                'id'=>$_GET["article"]
            ]
            );
            $array = $stmt1->fetchAll();
            if (!empty($array)) {
                foreach ($array  as $column) {
                    array_push($table,$column);
                }
                echo blog($table);
            } else {
                echo "pas d'article correspondant";
            }
        ?>


        <?php include('modules/aside.php') ?>
    </div>
    <?php include('modules/footer.php') ?>
</body>

</html>
