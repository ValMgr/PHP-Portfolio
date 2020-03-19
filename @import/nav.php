<header class="navbar">
        <section class="navbar-section">
            <a href="index.php" class="navbar-brand mr-2">V² Blog</a>
            <?php if(!$admin){ ?>
            <a href="projects/add.php" class="btn btn-link">add project</a>
            <?php } ?>
        </section>
   
        <!-- C'est pas de la triche -->
        <section class="navbar-section">
            <?php if(!$admin){ ?>
                <button class="btn btn-primary" onclick="window.location.href='./connect/login_form.php'">Login</button>
            <?php }
                else{ ?>
                    <p class="m-1">Bonjour <a href="profil/?id=<?php echo $_SESSION['profil'][0] ?>"><?php echo $_SESSION['profil'][1] ?></a> </p>
                    <img class="pp" src="<?php echo($_SESSION['profil'][3]) ?>" />
                    <button class="btn btn-primary" onclick="window.location.href='./connect/disconnect.php'">Disconnect</button>
                <?php } ?>
        </section>
                

    </header>