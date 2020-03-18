<?php 

if (isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {
    $admin = $_SESSION['admin'];
}
else {
    $admin = false;
}

?>