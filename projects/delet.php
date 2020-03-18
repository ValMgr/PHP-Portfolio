<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    include('../@import/db_connect.php');

    $id =  $_POST['id'];


    $query = $dbPdo->prepare('DELETE FROM projects WHERE id= :id');
    $query->execute(array(
        'id' => $id
    ));


    print_r($query);

    echo '<br>';

    echo $id;

    echo 'Projet supprimé ! ! !';

    header ('location: ../index.php');

    ?>

</body>

</html>