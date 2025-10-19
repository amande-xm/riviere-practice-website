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

if (isset(($_POST['Adresse_mail']), ($_POST['Nom']), ($_POST['Mdp']))) {
    if (filter_var($_POST['Adresse_mail'], FILTER_VALIDATE_EMAIL)) {
        $password = password_hash($_POST["Mdp"], PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO users(email, lastname, password) values (:email, :name, :pass)");
        $stmt->execute(
            [
                'email' => $_POST["Adresse_mail"],
                'name' => $_POST["Nom"],
                'pass' => $password
            ]
        );
    }
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
                <caption> Informations récoltées dans le formulaire d'abonnement</caption>
                <thead>
                    <tr>
                        <th>Catégorie</th>
                        <th>Données</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Adresse mail</td>
                        <td><?= $_POST['Adresse_mail'] ?? 'erreur' ?></td>
                    </tr>
                    <tr>
                        <td>Mot de passe </td>
                        <td> Accès interdit</td>
                    </tr>
                    <tr>
                        <td>Prénom</td>
                        <td><?= $_POST['Prenom'] ?? 'erreur' ?></td>
                    </tr>
                    <tr>
                        <td>Nom</td>
                        <td><?= $_POST['Nom'] ?? 'erreur' ?></td>
                    </tr>
                    <tr>
                        <td>Date de naissance</td>
                        <td><?= $_POST['Date_naissance'] ?? 'erreur' ?></td>
                    </tr>
                    <tr>
                        <td> Adresse</td>
                        <td><?= $_POST['Adresse'] ?? 'erreur' ?></td>
                    </tr>
                    <tr>
                        <td> Code postal</td>
                        <td><?= $_POST['Code_postal'] ?? 'erreur' ?></td>
                    </tr>
                    <tr>
                        <td> Ville</td>
                        <td><?= $_POST['Ville'] ?? 'erreur' ?></td>
                    </tr>
                    <tr>
                        <td> Genre</td>
                        <td><?= $_POST['sex'] ?? 'erreur' ?></td>
                    </tr>
                    <tr>
                        <td> Avatar</td>
                        <td>
                            <?php
                            if (isset($_FILES["Avatar"])) {
                                if ($_FILES['Avatar']['error'] == 0) {
                                    move_uploaded_file(
                                        $_FILES["Avatar"]['tmp_name'],
                                        __DIR__ . '/img/photo-uploaded.jpg'
                                    );
                                    echo '<img src="/img/photo-uploaded.jpg"';
                                }
                            } else {
                                echo 'erreur';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td> Loisirs</td>
                        <td>
                            <?php
                            if (isset($_POST["Loisir"])) {
                                foreach ($_POST["Loisir"] as $value) {
                                    echo $value . " ";
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td> Couleur</td>
                        <td>
                            <? $_POST['Couleur'] ?? 'erreur' ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
        <?php include('modules/aside.php') ?>
    </div>
    <?php include('modules/footer.php') ?>
</body>

</html>