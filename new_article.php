<?php require_once 'include/config.php' ?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Les paysages | Ajoutez un article</title>
</head>

<body>
    <header>
        <?php include_once 'modules/navbar.php' ?> 
        <h1> AJout d'un article</h1>
    </header>
    <main>
        <form action="article_traitement.php" method="post" enctype="multipart/form-data">

            <label for="titre">Titre de votre article</label>
            <input type="text" name="Titre" id="titre" required>

            <label for="description">Description courte de l'article</label>
            <input type="textarea" name="Description" id="description" required>

            <label for="contenu">Contenu de l'article</label>
            <input type="textarea" name="Contenu" id="contenu" required>

            <label for="photo">Photo pour l'article</label>
            <input type="file" name="Photo" accept="image/png, image/jpeg" multiple="false" id="photo">

            <button type="submit" id="envoi">Envoyer</button>
            <button type="reset" id="envoi">Effacer</button>
        </form>
    </main>
    <aside>
        <section>
            <img src="img/verdure.jpg" alt="photo de rivière dans un paysage verdoyant">
            <h3>Paysage verdoyant</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis possimus blanditiis eum repudiandae
                aliquam totam.</p>
        </section>
        <section>
            <img src="img/montagnes.jpg" alt="photo de montagne">
            <h3>Les montagnes</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem nam provident modi obcaecati
                doloribus.</p>
        </section>
        <section>
            <img src="img/plage.jpg" alt="photo d'une plage">
            <h3>La plage</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente iste vitae officiis.</p>
        </section>
        <section>
            <img src="img/champ.jpg" alt="photo de champs">
            <h3>Les champs</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et sed aliquam maiores nulla.</p>
        </section>
        <section>
            <img src="img/soleil.jpg" alt="photo d'un coucher de soleil au-dessus de montagnes">
            <h3>Les montagnes</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ad sequi vero non
                exercitationem, maiores error.</p>
        </section>
    </aside>
    <footer>
        <p>© Tous droits réservés</p>
        <nav>
            <h4> Articles récents</h4>
            <ul>
                <li><a href="">Article 1</a></li>
                <li><a href="">Article 1</a></li>
                <li><a href="">Article 1</a></li>
            </ul>
            <h4> Contact</h4>
            <ul>
                <li><a href="">Envoyez-nous un message</a></li>
                <li><a href="">Nos réseaux sociaux</a></li>
            </ul>
        </nav>
    </footer>
</body>

</html>