<?php

include('@import/db_connect.php');

$admin = true

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - PHP</title>

    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="@import/style_index.css">

</head>

<body>

    <header class="navbar">
        <section class="navbar-section">
            <a href="index.php" class="navbar-brand mr-2">V² Blog</a>
            <a href="projects/add.php" class="btn btn-link">add</a>
        </section>
        <section class="navbar-section">
            <button class="btn">Register</button>
            <button class="btn btn-primary">Login</button>
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
                        <div class="card-image"><img class="img-responsive" src="<?php echo $donnees['link'] ?>"></div>
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

                                <a class="btn btn-primary" href='#' onclick='document.getElementById("<?php echo $donnees['id']  ?>").submit()'>Modifier</a>
                                <a class="btn btn-error" href='#' >Supprimer</a>
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