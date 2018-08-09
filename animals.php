<?php
    include 'header.php';
    $servername = "127.0.0.1";
    $username = "root";
    $password = "tracker";
    $dbName = "paws-to-care-db";
    $conn2 = new mysqli($servername,$username,$password,$dbName);
    if($conn2->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    $userId = $_SESSION["userId"];
    // echo $userId;
    // $animalQuery = "SELECT cats.name AS `Name`, CONCAT(cats.breed, ' (Cat)') AS `Breed`, cats.sex AS `Sex` FROM catsOwners INNER JOIN cats ON cats.id=catsOwners.catsFk WHERE catsOwners.ownersFk=$userId UNION
    // SELECT dogs.name, CONCAT(dogs.breed, ' (Dog)'), dogs.sex FROM dogsOwners INNER JOIN dogs ON dogs.id=dogsOwners.dogsFk WHERE dogsOwners.ownersFk=$userId UNION
    // SELECT exotics.name, CONCAT(exotics.species, ' (Exotic)'), exotics.sex FROM exoticsOwners INNER JOIN exotics ON exotics.id=exoticsOwners.exoticsFk WHERE exoticsOwners.ownersFk=$userId;";

    // $animals = $conn->query($animalQuery);
    // $animalResults = $animals->fetch_all();
?>
<body>
    <?php include 'navbar.php';?>
    <div class="jumbotron text-center bg-info text-white">
        <h1>Owners</h1>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Breed</th>
                    <th>Sex</th>
                </tr>
            </thead>
            <tbody>
                <?php //foreach($animalResults as $animalData): ?>
                    <tr>
                        <td><?//=$animalData[0]?></td>
                        <td><?//=$animalData[1]?></td>
                        <td><?//=$animalData[2]?></td>
                    </tr>
                <?php //endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</body>