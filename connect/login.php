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
                $_SESSION['profil'] = array($array[0], $array[1]);

                echo "Connected...";
                header ('location: ../index.php');

                die;
                
            }
            
            
        }

        $_SESSION['admin'] = false;
        echo '<body onLoad="alert(\'Membre non reconnu...\')">';
        echo '<meta http-equiv="refresh" content="0;URL=login_form.php">';



    }
    else{
        $_SESSION['admin'] = false;
        echo '<body onLoad="alert(\'Champs vide\')">';
        echo '<meta http-equiv="refresh" content="0;URL=login_form.php">';
    }

    

?>
