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

    <a href="projects/add.php">add</a>

    <?php
    // on récupère les données de la table projects
    $reponse = $dbPdo->query('SELECT * FROM projects');

    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch()) {
    ?>
        <p>
            Project : <?php echo $donnees['name'] . '<small>' . $donnees['type'] . ' ' . $donnees['year'] . '</small>' ?><br>
            <?php echo $donnees['description'] ?><br>
            <?php

            if ($donnees['name'] == 0) {
                // image
                echo '<img src="' . $donnees['link'] . '">';
            } elseif ($donnees['name'] == 1) {
                echo 'video';
            } else {
                echo 'error';
            }
            ?>
        </p>

    <?php
    }

    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>

</body>

</html>