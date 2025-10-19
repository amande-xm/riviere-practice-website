<?php require_once (__DIR__ . '/../include/config.php');?>
<nav>    
            <input type="checkbox" id="burger">
            <ul>
                <li><?= activite('/index.php', 'Accueil') ?></li>
                <li><?= activite('', 'Présentation') ?></li>
                <li><?= activite('/contact.php', 'Contact') ?></li>
                <li><?= activite('', 'Blog') ?>
                    <div id="dropdown">
                        <ul>
                            <li><a href="/articles/article1.php">Article 1</a></li>
                            <li><a href="/articles/article2.php">Article 2</a></li>
                            <li><a href="/articles/article3.php">Article 3</a></li>
                            <li><a href="/articles/article4.php">Article 4</a></li>
                        </ul>
                    </div>
                </li>
                <li><?= activite('/abonnement.php', 'Abonnez-vous') ?></li>
                <li><a href="">Statistiques</a></li>
                <li><?= activite('/new_article.php', "Création d'article") ?>
                <li><?php
                if(isset($_SESSION['utilisateur']) ):
                    echo 'Bienvenue ' . $_SESSION['utilisateur']; 
                    ?><li> <a href="/disconnect.php"> Déconnexion </a></li>
                    <?php
            
                else :
                    echo activite('/login.php', 'Connectez-vous');/*affiche lien pour se connecter*/
                endif;
                 ?></li>
            </ul>
            <label for="burger">
                <span class="burger"></span>
            </label>
        </nav>

        <?php  
        ?> 