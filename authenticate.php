<?php
    session_start();
    $_SESSION["login"] = true;

    header('Location: '.$_SERVER['HTTP_REFERER']);
?>