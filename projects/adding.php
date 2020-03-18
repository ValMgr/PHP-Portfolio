    <?php

    include('../@import/db_connect.php');

    $name =  $_POST['name'];
    $description =  $_POST['description'];
    $type =  $_POST['type'];
    $year =  $_POST['year'];
    $img_or_video =  $_POST['img_or_video'];
    $url =  $_POST['url'];

    $query = $dbPdo->prepare('INSERT INTO projects (id, name, description, type, year, img_or_video, link) 
    VALUES(NULL, :name, :description, :type, :year, :img_or_video, :url)');
    $query->execute(array(
        'name' => $name,
        'description' => $description,
        'type' => $type,
        'year' => $year,
        'img_or_video' => $img_or_video,
        'url' => $url
    ));


    print_r($query);

    echo 'Projet ajouté ! ! !';

    header ('location: ../index.php');

    ?>