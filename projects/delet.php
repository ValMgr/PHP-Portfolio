<?php

    include('../@import/db_connect.php');

    $id =  $_GET['id'];


    $query = $dbPdo->prepare('DELETE FROM projects WHERE id= :id');
    $query->execute(array(
        'id' => $id
    ));


    print_r($query);

    echo '<br>';

    echo $id;

    echo 'Project delted';

    header ('location: ../../index.php');

    ?>
