<?php
    session_start();
    session_destroy();

    header('location:t_login.php')
?>