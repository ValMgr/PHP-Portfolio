<?php

include('../@import/db_connect.php');
include('../@import/connection_check.php');

$id = $_GET['id'];

$requete = $dbPdo->prepare("SELECT * FROM USER WHERE NumUser = ?");
$requete->execute([$id]);
$data = $requete->fetch();

?>

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

        <!-- C'est pas de la triche -->
        <section class="navbar-section">
            <?php if (!$admin) { ?>
                <button class="btn btn-primary" onclick="window.location.href='./connect/login_form.php'">Login</button>
            <?php } else { ?>
                <p class="m-1">Bonjour <a href="profil?id=<?php echo $_SESSION['profil'][0] ?>"><?php echo $_SESSION['profil'][1] ?></a> </p>
                <img class="pp" src="<?php echo ($_SESSION['profil'][3]) ?>" />
                <button class="btn btn-primary" onclick="window.location.href='./connect/disconnect.php'">Disconnect</button>
            <?php } ?>
        </section>

    </header>

    <div class="content vertical-center">

        <form class="form-horizontal p-centered" action="edit_profil.php" method="post">

            <input class="form-input" type="hidden" id="id" name="id" value="<?= $id ?>">

            <div class="form-group">
                <label class="form-label" for="NameUser">Username</label> 
                <input class="form-input" type="text" id="NameUser" name="NameUser" placeholder="Username" value="<?= $data[1] ?>">
            </div>

            <div class="form-group">
                <!-- <label class="form-label" for="pwd">Password</label>  -->
                <input class="form-input" type="hidden" id="pwd" name="PasswordUser" placeholder="Password" value="<?= $data[2] ?>">
            </div>

            <div class="form-group">
                <!-- <label class="form-label" for="valid-password">ConfirmPassword</label>  -->
                <input class="form-input" type="hidden" id="valid-password" name="valid-password" placeholder="Password" value="<?= $data[2] ?>">
            </div>

            <div class="form-group">
                <label class="form-label" for="DescUser">Description</label> 
                <textarea class="form-input" id="DescUser" name="DescUser" placeholder="Description" rows="3"><?= $data[3] ?></textarea>
            </div>

            <div class="form-group">
                <label class="form-label" for="ImgUser">Profil picture</label> 
                <input class="form-input" type="text" id="ImgUser" name="ImgUser" placeholder="Profil picture" value="<?= $data[4] ?>">
            </div>

            <input  class="btn" type="submit" value="Sauvegarder">
            <a class="btn" onclick="window.location.href='../profil.php?id=<?= $id ?>'">Retour</a>
            <a class="btn" onclick="window.location.href='change_password_form.php?id=<?= $id ?>'">Change password</a>



        </form>

    </div>

</body>
</html>