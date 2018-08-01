<?php include 'header.php';?>
<!-- CSS -->
<style>
    html,body{
        height:100%;
    }
    .carousel,.item,.active{
        height:100%;
    }
    .carousel-item{
        height: 400px;
    }
    .carousel h1 {
        font-size: 75px;
    }
    .carousel-inner{
        height:100%;
    }
    h1{
        padding-top: 20px;
    }
</style>
<body>
    <?php include 'navbar.php';?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../images/dog.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Dogs</h1>
                    <?php
                    $servername = "127.0.0.1";
                    $username = "root";
                    $password = "tracker";
                    $dbName = "paws-to-care-db";

                    $conn = new mysqli($servername,$username,$password,$dbName);
                    if($conn->connect_error){
                        die("Connection failed: ".$conn->connect_error);
                    }
                    $data = $conn->query("select * from tester");
                    echo "<h4>$data</h4>"
                    ?>
                    <!-- <h4>We Love Dogs</h4> -->
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/cat.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Cats</h1>
                    <h4>We Have Nation-Renowned Cat Care</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/exotic.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Exotics</h1>
                    <h4>We Pride Ourselves in Our Care for Exotic Animals</h4>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- <div id="myModal" class="modal fade" role="dialog"> -->
        <!-- <div class="modal-dialog"> -->
            <!-- Modal content-->
            <!-- <div class="modal-content"> -->
            <!-- <div class="modal-header"> -->
                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                <!-- <h4 class="modal-title">Find P(X<span class="sign"></span>=<span class="xValue">x</span>), X ~ Bin(<span class="size">n</span>,<span class="probability">p</span>)</h4> -->
            <!-- </div> -->
            <!-- <div class="modal-body"> -->
                <!-- <p>The probability that P(X<span class="sign"></span>=<span class="xValue">x</span>) ends up being: <span id="answer"></span> or <span id="answerFormatted"></span>%</p> -->
            <!-- </div> -->
            <!-- <div class="modal-footer"> -->
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            <!-- </div> -->
            <!-- </div> -->
        
        <!-- </div> -->
    <!-- </div> -->
</body>
</html>