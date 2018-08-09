<?php include 'header.php';
        $servername = "127.0.0.1";
            $username = "root";
            $password = "tracker";
            $dbName = "paws-to-care-db";

            $conn = new mysqli($servername,$username,$password,$dbName);
            if($conn->connect_error){
                die("Connection failed: ".$conn->connect_error);
            }
        $id = 0; $fname = 1; $lname = 2; $add1 = 4; $add2 = 5; $city = 6; $st = 7; $zip = 8;
        $query = $conn->query("SELECT * FROM owners");
        $data = $query->fetch_all();
        echo $data[0][0]." ".$data[0][1]." ".$data[0][2]." ".$data[0][3]." ".$data[0][4]." ".$data[0][5]." ".$data[0][6]." ".$data[0][7]." ".$data[0][8]." ".$data[0][9]." ".$data[0][10];
?>
    <!-- Javascript -->
    <script>
        $(document).ready(function(){});
    </script>
<body>
    <?php include 'navbar.php';?>
    <div class="jumbotron text-center bg-info text-white">
        <h1>Dogs</h1>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <table class="table dog-table">
                <thead>
                    <!-- <tr>
                        <th scope="col"><div class="col-sm-12" style="padding-left: 0"><input data-key="name" type="text" placeholder="filter" class="form-control"></div></th>
                        <th scope="col"><div class="col-sm-12" style="padding-left: 0"><input data-key="breed" type="text" placeholder="filter" class="form-control"></div></th>
                        <th scope="col"><div class="col-sm-12" style="padding-left: 0"><input data-key="sex" type="text" placeholder="filter" class="form-control"></div></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th> -->
                        <!-- <th scope="col"><div class="col-sm-12" style="padding-left: 0"><input data-key="owners" type="text" placeholder="filter" class="form-control"></div></th>
                        <th scope="col"><div class="col-sm-12" style="padding-left: 0"><input data-key="notes" type="text" placeholder="filter" class="form-control"></div></th> -->
                    <!-- </tr> -->
                    <tr>
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="name">Name <span id="arrow"></span></th>
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="breed">Breed <span id="arrow"></span></th>
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="sex">Sex <span id="arrow"></span></th>
                        <th scope="col" class="sortable" data-key="shots">Shots <span id="arrow"></span></th>
                        <th scope="col" class="sortable" data-key="licensed">Licensed <span id="arrow"></span></th>
                        <th scope="col" class="sortable" data-key="neutered">Neutered <span id="arrow"></span></th>
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="age">Age <span id="arrow"></span></th>
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="size">Weight <span id="arrow"></span></th>
                        <th scope="col" data-key="owners">Owners <span id="arrow"></span></th>
                        <th scope="col" data-key="notes">Notes <span id="arrow"></span></th>
                    </tr>
                </thead>
                <tbody data-tableType="dogs" id="dogTable">
                </tbody>
            </table>
        </div>
    </div>
    <div id="ownerModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Owner Modal</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
                <b>Name:</b><br>
                <span id="ownerName"></span><br><br>
                <b>Address:</b><br>
                <span id="ownerAddress"></span>
              </div>
              
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
              
            </div>
        </div>
    </div>
    <div id="notesModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Notes Modal</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
                <span id="noteSpan"></span>
              </div>
              
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
              
            </div>
        </div>
    </div>
</body>
</html>
