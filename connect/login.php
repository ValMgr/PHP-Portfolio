<?php

include('../@import/db_connect.php');


    if (isset($_POST['login']) && isset($_POST['pwd'])) {

    $requete = "SELECT * FROM USER WHERE 1";
    $query = $dbPdo->prepare($requete);
    $obj = $dbPdo->query ($requete);

    foreach ($obj as $key => $array) {
            $valid_username = $array[1];
            $valid_password = $array[2];

        if ($valid_username == $_POST['login'] && $valid_password == $_POST['pwd']) {


            $_SESSION['admin'] = true;
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['pwd'] = $_POST['pwd'];
            $_SESSION['username'] = $valid_username;

            header ('location: ../index.php');
            //header ('location: login_form.php');
            die;
            
        }
        
        
    }


    /*else {
    echo 'Les variables du formulaire ne sont pas déclarées.';
    }*/

        $_SESSION['admin'] = false;
        $_SESSION['login'] = null;
        $_SESSION['pwd'] = null;
        echo '<body onLoad="alert(\'Membre non reconnu...\')">';
        echo '<meta http-equiv="refresh" content="0;URL=login_form.php">';
    }
?>
