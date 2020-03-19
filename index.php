<?php

include('@import/db_connect.php');
include('@import/connection_check.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - PHP</title>
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="@import/style.css">

</head>

<body>

    <header class="navbar">
        <section class="navbar-section">
            <a href="index.php" class="navbar-brand mr-2">V² Blog</a>
            <?php if ($admin) { ?>
                <a href="projects/add.php" class="btn btn-link">add project</a>
            <?php } ?>
        </section>

        <!-- C'est pas de la triche -->
        <section class="navbar-section">
            <?php if (!$admin) { ?>
                <button class="btn btn-primary" onclick="window.location.href='./connect/login_form.php'">Login</button>
            <?php } else { ?>
                <p class="m-1">Bonjour <a href="profil/?id=<?php echo $_SESSION['profil'][0] ?>"><?php echo $_SESSION['profil'][1] ?></a> </p>
                <img class="pp" src="<?php echo ($_SESSION['profil'][3]) ?>" />
                <button class="btn btn-primary" onclick="window.location.href='./connect/disconnect.php'">Disconnect</button>
            <?php } ?>
        </section>


    </header>

    <div class="content">
        <div class="columns projects">

            <?php
            // on récupère les données de la table projects par ordre décroissant
            $reponse = $dbPdo->query('SELECT * FROM projects ORDER BY year DESC');

            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch()) {
            ?>

                <div class="column col-6 col-xs-12">
                    <div class="card">
                        <div class="card-image">
                            <?php
                        
                            if ($donnees['img_or_video'] == 0){

                                echo '<img class="img-responsive" src="' . $donnees['link'] . '">';

                            } elseif ($donnees['img_or_video'] == 1) {
                                echo '<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/'. $donnees['link'] .'?loop=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>';
                            } else {
                                echo 'error';
                            } ?>


                        </div>
                        <div class="card-header">
                            <div class="card-title h5"><?php echo $donnees['name'] ?></div>
                            <div class="card-subtitle text-gray"><?php echo $donnees['type'] . ' - ' . $donnees['year'] ?></div>
                        </div>
                        <div class="card-body"><?php echo $donnees['description'] ?></div>

                        <?php if ($admin) { ?>

                            <div class="card-footer">
                                <form id="<?php echo ($donnees['id']);  ?>" action="projects/edit.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo ($donnees['id']);;  ?>" />
                                </form>

                                <a class="btn btn-primary" onclick="document.getElementById('<?php echo $donnees['id'] ?>').submit()">Modifier</a>
                                <a class="btn btn-error" onclick="window.location.href='./projects/delet.php/?id=<?php echo $donnees['id'] ?>'">Supprimer</a>
                            </div>


                        <?php } ?>


                    </div>
                </div>

            <?php
            }

            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>


        </div>
    </div>
</body>

</html>