<?php

        include('../@import/db_connect.php');


        $_SESSION['admin'] = false;
        unset($_SESSION['login']);
        unset($_SESSION['pwd']);
        unset($_SESSION['username']);


        header ('location: ../index.php');


    
?>