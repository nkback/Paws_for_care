<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "tracker";
    $dbName = "paws-to-care-db";
    $conn = new mysqli($servername,$username,$password,$dbName);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    $data = $conn->query("select * from dogs");
    // echo json_encode($data->fetch_all());
    while($r = fetch_assoc($data))
        $rows[] = $r;
    echo json_encode($rows);
    //return response($data,200);
    // $row = $data->fetch_assoc();
    // "<h4>".$row["test_column"]."</h4>";
?>
