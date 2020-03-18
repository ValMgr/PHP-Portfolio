<?php

include('../@import/db_connect.php');


    if (isset($_POST['DescUser']) && isset($_POST['NameUser']) && isset($_POST['ImgUser']) && isset($_POST['PasswordUser']) && isset($_POST['valid-password'])) {

    if ($_POST['PasswordUser'] == $_POST['valid-password']) {

        $username = $_POST['NameUser'];
        $password = $_POST['PasswordUser'];
        $desc = $_POST['DescUser'];
        $img = $_POST['ImgUser'];


        $query = $dbPdo->prepare('INSERT INTO user (NumUser, NameUser, PasswordUser, DescUser, ImgUser) 
        VALUES(NULL, :username, :password, :desc, :img)');
        $query->execute(array(
            'username' => $username,
            'password' => $password,
            'desc' => $desc,
            'img' => $img
        ));
    

        print_r($query);
        echo 'Utilisateur ajouté à la db';


        header ('location: login_form.php');
    }
    else {
        $_SESSION['Connected'] = false;
        echo '<body onLoad="alert(\'Les mots de passe ne correspondent pas.\')">';
        echo '<meta http-equiv="refresh" content="0;URL=register_form.php">';
    }
    }
    else {
    echo 'Les variables du formulaire ne sont pas déclarées.';
    }

?>
