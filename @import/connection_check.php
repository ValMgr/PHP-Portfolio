<?php 

if (isset($_SESSION['Connected']) && !empty($_SESSION['Connected'])) {
    $admin = $_SESSION['Connected'];
}
else {
    $admin = false;
}

?>