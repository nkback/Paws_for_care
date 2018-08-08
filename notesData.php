<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "tracker";
    $dbName = "paws-to-care-db";
    $conn = new mysqli($servername,$username,$password,$dbName);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    echo $_REQUEST['type'];
    // $data = $conn->query("select * from ".$_REQUEST['type']."Notes where ".$_REQUEST['type']."sFk=".$_REQUEST['id'].";");
    // $id = $data->fetch_assoc();
    // $newData = $conn->query("select * from owners where id=".$id["ownersFk"].";");
    // echo json_encode($newData->fetch_all());
?>
