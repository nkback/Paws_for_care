<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "tracker";
    $dbName = "paws-to-care-db";
    $conn = new mysqli($servername,$username,$password,$dbName);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];
    if(strrev($password) == $username){
        $data = $conn->query("SELECT * FROM owners WHERE username='$username' LIMIT 1");
        $row = mysqli_fetch_assoc($data);

        if($row) {
            $_SESSION["login"] = true;
            $_SESSION["admin"] = $row["admin"];
            $_SESSION["userId"] = $row["id"];
        }
        else{
            $_SESSION["error"] = "Username or password is incorrect.";
        }
    }
    else
        $_SESSION["error"] = "Username or password is incorrect.";


    header("Location: " . $_SERVER["HTTP_REFERER"]);
?>