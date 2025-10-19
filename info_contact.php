<?php require_once 'include/config.php' ;

$dsn = 'mysql:dbname=p2300677;host=iutbg-lamp.univ-lyon1.fr';
$user = 'p2300677';
$password = '12300677';
try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
echo 'Connexion réussie';

if (isset(($_POST['Prenom']), ($_POST['Nom']), ($_POST['Sujet']), ($_POST['Message']), ($_POST['Adresse_mail']),$_POST['Genre'])) {
    if (filter_var($_POST['Adresse_mail'], FILTER_VALIDATE_EMAIL)) {
        $stmt = $pdo->prepare("INSERT INTO Contact(prenom, nom, sujet, message, mail, genre) values (:prenom, :name, :sujet, :message, :email, :gender)");
        $stmt->execute(
            [
                'prenom' => $_POST['Prenom'],
                'name' => $_POST['Nom'],
                'sujet' => $_POST['Sujet'],
                'message' => $_POST['Message'],
                'email' => $_POST['Adresse_mail'],
                'gender' => $_POST['Genre'],
            ]
        );
        echo " ça marche";
    }
}
else {
    echo " ça marche pas";
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
        <main>
            <table>
                <caption> Informations récoltées dans le formulaire de contact</caption>
                <thead>
                    <tr>
                        <th>Catégorie</th>
                        <th>Données</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Prénom</td>
                        <td><?= $_POST['Prenom'] ?? 'erreur' ?></td>
                    </tr>
                    <tr>
                        <td>Nom</td>
                        <td><?= $_POST['Nom'] ?? 'erreur' ?></td>
                    </tr>
                    <tr>
                        <td>Sujet</td>
                        <td><?= $_POST['Sujet'] ?? 'erreur' ?></td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td><?= $_POST['Message'] ?? 'erreur' ?></td>
                    </tr>
                    <tr>
                        <td>Adresse mail</td>
                        <td><?= $_POST['Adresse_mail'] ?? 'erreur' ?></td>
                    </tr>
                    <tr>
                        <td> Genre</td>
                        <td><?= $_POST['Genre'] ?? 'erreur' ?></td>
                    </tr>
                </tbody>
            </table>
        </main>
        <?php include('modules/aside.php') ?>
    </div>
    <?php include('modules/footer.php') ?>
</body>

</html>