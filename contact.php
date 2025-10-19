<?php require_once 'include/config.php' ?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Les paysages | Contact</title>
</head>

<body>
    <header>
    <?php include_once 'modules/navbar.php' ?> 
         <h1> Contactez-nous</h1>
    </header>
    <div id="content">
        <main>
            <form action="info_contact.php" method="post">
                <label for="prenom">Prénom</label>
                <input type="text" name="Prenom" id="prenom" required>

                <label for=nom>Nom</label>
                <input type="text" name="Nom" id="nom" required>

                <label for="sujet">Sujet</label>
                <input type="text" name="Sujet" id="sujet">

                <label for="message">Votre message :</label>
                <textarea name="Message" id="message" rows="10" cols="50" maxlength="500" placeholder="Tapez ici..."
                    required></textarea>

                <label for="mail">Adresse e-mail</label>
                <input type="email" name="Adresse_mail" id="mail" required>

                <label for="genre"> Indiquez votre genre </label>
                <select name="Genre" id="genre">
                    <option value="femme" selected>Femme</option>
                    <option value="homme">Homme</option>
                    <option value="undefined">Je ne souhaite pas le préciser</option>
                    <option value="alien">Non-humain</option>
                    <option value="machine">Machine</option>
                </select>
                <button type="submit" id="envoi">Envoyer</button>
                <button type="reset" id="envoi">Effacer</button>
            </form>
            <section>
                <h4> Notre numéro de téléĥoen :</h4>
                <p><?= PHONE ?></p>
                <h4> Notre adresse postale :</h4>
                <p><?= ADDRESS ?></p>
                <h4> Notre numéro de téléĥoen :</h4>
                <p><?= MAIL ?></p>
            </section>
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
    </div>
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