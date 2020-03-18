<?php

        include('../@import/db_connect.php');


        $_SESSION['admin'] = false;
        unset($_SESSION['profil']);


        header ('location: ../index.php');


    
?>