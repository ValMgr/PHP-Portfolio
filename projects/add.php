<?php include('../@import/db_connect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add project</title>

    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="../@import/style_index.css">

</head>

<body>
    <div class="content">
        <form action="adding.php" method="post">

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
                <label class="form-label">Illustration</label>
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
                <br>

            <!-- <input type="submit" value="Valider" /> -->
            <button class="btn btn-primary" type="submit" value="Valider">Valider</button>
        </form>
    </div>
</body>

</html>