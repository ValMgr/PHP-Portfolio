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

    <form action="adding.php" method="post">
        <label for="name">Nom project :</label>
        <input type="text" name="name" />


        <label for="type">Type (video, photo, webdesign, ...) :</label>
        <input type="text" name="type" />

        <label for="year">Année de réalisation :</label>
        <input type="year" name="year" />

        <label for="year">Description :</label>
        <textarea type="text" name="description"> </textarea>

        <div class="form-group">
            <label class="form-label">Select :</label>
            <label class="form-radio">
                <input type="radio" name="img_or_video" value="0" checked>
                <i class="form-icon"></i> Image
            </label>
            <label class="form-radio">
                <input type="radio" name="img_or_video" value="1">
                <i class="form-icon"></i> Video
            </label>
        </div>
        <input type="text" name="url" />


        <input type="submit" value="Valider" />
    </form>

</body>

</html>