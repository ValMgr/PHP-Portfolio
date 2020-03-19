<?php

include('@import/db_connect.php');
include('@import/connection_check.php');

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
    <link rel="stylesheet" href="./@import/style.css">

</head>
<body>


    <header class="navbar">
        <section class="navbar-section">
            <a href="index.php" class="navbar-brand mr-2">V² Blog</a>
            <?php if ($admin) { ?>
                <a href="connect/register_form.php" class="btn btn-link">add Admin</a>
            <?php } 
            
                if(isset($_SESSION['profil']) && $_SESSION['profil'][1] == $data[1]){ ?>
                    <a href="connect/edit_profil_form.php?id=<?= $data[0] ?>" class="btn">Edit profil</a>
                <?php } ?>
        
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

    <div class="content profil">


            <div class="profil-pic p-centered">
                <img src="<?= $data[4] ?>">
            </div>

            <h1 class="text-align p-centered"><?= $data[1] ?></h1>
            <p class="text-align p-centered"><?= $data[3] ?></p>
            <br>

            <?php $query = $dbPdo->prepare("SELECT * FROM projects WHERE NumUser = ?");
                  $query->execute([$id]);
                  $NbrProjet = $query->fetchAll();   ?>

            <p class="text-align p-centered">Projet(s) réalisé: <?= count($NbrProjet) ?></p>



    </div>




</body>
</html>