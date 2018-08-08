<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "tracker";
    $dbName = "paws-to-care-db";
    $conn = new mysqli($servername,$username,$password,$dbName);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    $data = $conn->query("select ownersFk from ".$_REQUEST['type']."Owners where dogsFk=".$_REQUEST['id'].";");
    $id = $data->fetch_assoc();
    $newData = $conn->query("select * from owners where id=".$id["id"].";");
    echo json_encode($newData->fetch_all());
?>
