<?php require_once 'include/config.php' ?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Les paysages | Abonnez-vous</title>
</head>

<body>
    <header>
        <?php include_once 'modules/navbar.php' ?> 
        <h1> Abonnez-vous</h1>
    </header>
    <main>
        <form action="info_abonnement.php" method="post" enctype="multipart/form-data">
            <label for="mail">Adresse e-mail</label>
            <input type="email" name="Adresse_mail" id="mail" required>

            <label for="password">Mot de passe</label>
            <input type="password" name="Mdp" id="password" required>

            <label for="prenom">Prénom</label>
            <input type="text" name="Prenom" id="prenom" required>

            <label for=nom>Nom</label>
            <input type="text" name="Nom" id="nom" required>

            <label for="date"> Date de naisance</label>
            <input type="date" name="Date_naissance" id="date">

            <label for="address"> Adresse</label>
            <input type="text" name="Adresse" id="address">

            <label for="code"> Code postal</label>
            <input type="text" name="Code_postal" id="code" pattern="[0-9]{5}">

            <label for="ville"> Ville</label>
            <input type="text" name="Ville" id="ville">

            <div>
                <input type="radio" id="femme" name="sex" value="woman" />
                <label for="femme">Femme</label>

                <input type="radio" id="homme" name="sex" value="man" />
                <label for="homme">Homme</label>

                <input type="radio" id="undefined" name="sex" value="undefined" />
                <label for="undefined">Non renseigné</label>
            </div>

            <label for="photo">Mettez votre tête </label>
            <input type="file" name="Avatar" accept="image/png, image/jpeg" multiple="false" id="photo">
            <div>
                    <input type="checkbox" id="sport" name="Loisir[]" value="sport" />
                    <label for="sport">Sport</label>

                    <input type="checkbox" id="peinture" name="Loisir[]" value="peinture"/>
                    <label for="peinture">Peinture</label>

                    <input type="checkbox" id="lecture" name="Loisir[]" value="lecture"/>
                    <label for="lecture">Lecture</label>

                    <input type="checkbox" id="jeuxV" name="Loisir[]" value="jeux_video"/>
                    <label for="jeuxV">Jeux vidéos</label>

                    <input type="checkbox" id="instrument" name="Loisir[]" value="instrument"/>
                    <label for="instrument">Jouer d'un instrument</label>
            </div> 
            <label for="couleur">Indiquez votre couleur préférée</label>
            <input type="color" name="Couleur" id="couleur">

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