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

        <form class="form-horizontal p-centered" action="register.php" method="post">
            <div class="form-group">
                <label class="form-label" for="NameUser">Username</label> 
                <input class="form-input" type="text" id="NameUser" name="NameUser" placeholder="Username">
            </div>

            <div class="form-group">
                <label class="form-label" for="pwd">Password</label> 
                <input class="form-input" type="password" id="pwd" name="PasswordUser" placeholder="Password">
            </div>

            <div class="form-group">
                <label class="form-label" for="valid-password">ConfirmPassword</label> 
                <input class="form-input" type="password" id="valid-password" name="valid-password" placeholder="Password">
            </div>

            <div class="form-group">
                <label class="form-label" for="DescUser">Description</label> 
                <textarea class="form-input" id="DescUser" name="DescUser" placeholder="Description" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label class="form-label" for="ImgUser">Profil picture</label> 
                <input class="form-input" type="text" id="ImgUser" name="ImgUser" placeholder="Username">
            </div>

            <input  class="btn" type="submit" value="S'enregistrer">
            <a class="btn" onclick="window.location.href='../index.php'">Retour</a>


        </form>

    </div>

</body>
</html>