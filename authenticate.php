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
    $conn->query("select * from owners where username=".$username.";");
    // if(strrev($password) == $username){
    //     $conn->query("selct * from owners where username=".$username.";");
    //     while($row = $conn->fetch_assoc()){
    //         $_SESSION["login"] = true;
    //         if($row["admin"]){
    //             $_SESSION["admin"] = true;
    //         }
    //         else{
    //             $_SESSION["admin"] = false;
    //             $_SESSION["username"] = $row["id"];
    //         }
    //     }
    // }
    // if(!isset($_SESSION["login"])){
    //     $_SESSION["error"] = true;
    // }

    header('Location: '.$_SERVER['HTTP_REFERER']);
?>