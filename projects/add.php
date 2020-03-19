<?php include('../@import/db_connect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add project</title>

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


    <div class="content">
        <form class="form-horizontal p-centered" action="adding.php" method="post">
            <input type="hidden" name="numUser" value="<?php echo $_SESSION['profil'][0] ?>">

            <div class="form-group">
                <label class="form-label" for="name">Nom project :</label>
                <input class="form-input" type="text" name="name" placeholder="MonProject.php">
            </div>

            <div class="form-group">
                <label class="form-label" for="type">Type (video, photo, webdesign, ...) :</label>
                <input class="form-input" type="text" name="type" placeholder="developement">
            </div>

            <div class="form-group">
                <label class="form-label" for="year">Année de réalisation :</label>
                <input class="form-input" type="year" name="year" placeholder="2020">
            </div>

            <div class="form-group">
                <label class="form-label" for="description">Description :</label>
                <textarea class="form-input" placeholder="Description de mon projet" rows="3" name="description"></textarea>
            </div>

            <div class="form-group">
                <label class="form-label">Illustration :</label><br>
                <label class="form-radio form-inline">
                    <input type="radio" name="img_or_video" value="0" checked>
                    <i class="form-icon"></i> Image
                </label>
                <label class="form-radio form-inline">
                    <input type="radio" name="img_or_video" value="1">
                    <i class="form-icon"></i> Video
                </label>
            </div>
            <input class="form-input" type="text" name="url" placeholder="https://www.monrul.com/uxyz.png">
            <small>Pour les vidéos, insérez le code de votre video vimeo :<br>https://vimeo.com/<strong>395755581</strong></small>
            <br>
            <br>

            <button class="btn btn-primary" type="submit" value="Valider">Valider</button>
            <button class="btn" onclick="window.location.href='../index.php'">Retour</button>
        </form>
    </div>
</body>

</html>