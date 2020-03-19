<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit project</title>

    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="../@import/style.css">

</head>

<body>

    <header class="navbar">
        <section class="navbar-section">
            <a href="../index.php" class="navbar-brand mr-2">V² Blog</a>
        </section>

        <!-- C'est de la triche -->
        <section class="navbar-section">
        </section>

    </header>

    <?php

    $id = $_POST['id'];

    echo 'id : ' . $id;

    include('../@import/db_connect.php');

    $req = $dbPdo->prepare("SELECT * FROM projects WHERE id = ?");
    $req->execute([$id]);




    ?>

    <div class="content vertical-align">

        <?php
        while ($donnees = $req->fetch()) {
        ?>

            <form action="editing.php" class="form-horizontal p-centered" method="post">

                <input type="hidden" name="id" value="<?php echo $donnees['id']; ?>">

                <div class="form-group">
                    <label class="form-label" for="name">Nom project :</label>
                    <input class="form-input" type="text" name="name" value="<?php echo $donnees['name']; ?>">
                </div>

                <div class="form-group">
                    <label class="form-label" for="type">Type (video, photo, webdesign, ...) :</label>
                    <input class="form-input" type="text" name="type" value="<?php echo $donnees['type']; ?>">
                </div>

                <div class="form-group">
                    <label class="form-label" for="year">Année de réalisation :</label>
                    <input class="form-input" type="year" name="year" value="<?php echo (int) $donnees['year']; ?>">
                </div>

                <div class="form-group">
                    <label class="form-label" for="description">Description :</label>
                    <textarea class="form-input" placeholder="Description de mon projet" rows="3" name="description"><?php echo $donnees['description']; ?></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Illustration</label>
                    <label class="form-radio form-inline">
                        <input type="radio" name="img_or_video" value="0" <?php if ($donnees['img_or_video'] == 0) {
                                                                                echo 'checked';
                                                                            } ?>>
                        <i class="form-icon"></i> Image
                    </label>
                    <label class="form-radio form-inline">
                        <input type="radio" name="img_or_video" value="1" <?php if ($donnees['img_or_video'] == 1) {
                                                                                echo 'checked';
                                                                            } ?>>
                        <i class="form-icon"></i> Video
                    </label>
                </div>
                <input class="form-input" type="text" name="url" value="<?php echo $donnees['link']; ?>">
                <small>Pour les vidéos, insérez le code de votre video vimeo :<br>https://vimeo.com/<strong>395755581</strong></small>
                <br><br>

                <button class="btn btn-primary" type="submit" value="Valider">Valider</button>
                <button class="btn" onclick="window.location.href='../index.php'">Retour</button>

            </form>

        <?php
        };
        ?>

    </div>

</body>

</html>