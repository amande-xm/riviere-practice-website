<?php require_once './../include/config.php' ?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Les paysages | Article 4 </title>
</head>

<body>
    <header>
    <?php include_once __DIR__ . '/../modules/navbar.php' ?> 
    <?php include_once __DIR__ . '/../include/config.php' ?>
        <h1> Article 4</h1>
    </header>
    <div id="content">
        <main>
            <section>
                <img src="<?= images("img/img-1") ?>" alt="photo d'une rivière dans une vallée entre les montagnes">
                <div class="info">
                    <h2>La rivière</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus nemo, quisquam sint
                        dignissimos
                        doloremque, illum labore tenetur dicta rerum illo delectus, excepturi officia reprehenderit
                        voluptates deleniti magnifuga ad.</p>
                </div>
            </section>
            <section>
                <img src="<?= images("img/img-2") ?>" alt="photo d'un lac'">
                <div class="info">
                    <h2>Le lac</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum beatae in atque consectetur
                        facilis
                        perferendis quaerat perspiciatis consequuntur quos quasi voluptas eaque minus, a accusamus
                        expedita,
                        sunt rem tempora aperiam odit!</p>
                </div>
            </section>
            <section>
                <img src="<?= images("img/img-3") ?>" alt="photo de rapides">
                <div class="info">
                    <h2>Les rapides</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium aliquam ipsum quidem,
                        impedit
                        unde hic quod necessitatibus nemo? Vero amet atque, rerum pariatur magnam non quae ratione
                        natus,
                        odit ex libero nam?</p>
                </div>
            </section>
            <section>
                <img src="<?= images("img/img-4") ?>" alt="photo d'un ponton">
                <div class="info">
                <h2>Le ponton</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, ex amet fugiat mollitia
                        sapiente
                        accusantium saepe ut repellendus dolorum quibusdam iure ad culpa magni dicta. Aperiam, excepturi
                        iusto? Aut, minus!</p>
                </div>
            </section>
        </main>
        <?php include(__DIR__ . '/../modules/aside.php') ?>
    </div>
    <?php include(__DIR__ . '/../modules/footer.php') ?>
</body>

</html>