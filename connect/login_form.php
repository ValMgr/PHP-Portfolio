<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - PHP</title>
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

    <div class="content vertical-center">

        <form class="form-horizontal p-centered" action="login.php" method="post">
            <div class="form-group">
                <label class="form-label" for="login">Username</label>
                <input class="form-input" type="text" id="login" name="login" placeholder="Username">
            </div>

            <div class="form-group">
                <label class="form-label" for="pwd">Password</label>
                <input class="form-input" type="password" id="pwd" name="pwd" placeholder="Password">
            </div>

            <input class="btn" type="submit" value="Connexion">
            <!-- <a class="btn btn-primary" onclick="window.location.href='register_form.php'">S'enregistrer</a> -->
            <a class="btn" onclick="window.location.href='../index.php'">Retour</a>

        </form>

    </div>

</body>

</html>