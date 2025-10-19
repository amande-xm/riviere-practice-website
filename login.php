<?php require_once 'include/config.php' ?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Les paysages | Accueil </title>
</head>

<body>
    <header>
    <?php include_once 'modules/navbar.php' ?> 
        <h1> Les paysages</h1>
    </header>
  <body class="text-center">
    <form action="login_traitement.php" method="post" enctype="multipart/form-data">
      <h2>Formulaire de connexion</h2>

      <label for="inputEmail">Adresse Email</label>
      <input type="email" id="inputEmail" name="login" required autofocus >

      <label for="inputPassword">Mot de passe</label>
      <input type="password" id="inputPassword" name="mdp" required >

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember" name="remember"> Se souvenir de moi
        </label>
      </div>
      <button  type="submit">Connexion</button>
      <p>&copy; 2017-2020</p>
    </form>
</body>
</html>
