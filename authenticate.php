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
        $_SESSION["random"] = "Unset";
         $data = $conn->query("SELECT * FROM owners WHERE username='$username' LIMIT 1");
        $row = mysqli_fetch_assoc($data);
        //$_SESSION["login"] = true;
        $_SESSION["random"] = $row["id"];
         //if($data){
            // if($data->num_rows != 0){
            //     while($row = $data->fetch_assoc()){
            //         $_SESSION["login"] = true;
            //         $_SESSION["random"] = "Waht the hell";

            // //         if($row["admin"]){
            // //             $_SESSION["admin"] = true;
            // //         }
            // //         else{
            // //             $_SESSION["admin"] = false;
            // //             $_SESSION["username"] = $row["id"];
            // //         }
            //     }
            // }
            // else{
            // }
        //}
    }
    // if(!isset($_SESSION["login"])){
    //     $_SESSION["error"] = true;
    // }

    header('Location: '.$_SERVER['HTTP_REFERER']);
?>