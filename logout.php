<?php
    session_start();
    $_SESSION["login"] = false;
    header('Location: '.$_SERVER['HTTP_REFERER']);
?>