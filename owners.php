<?php include 'header.php';
        $servername = "127.0.0.1";
            $username = "root";
            $password = "tracker";
            $dbName = "paws-to-care-db";

            $conn = new mysqli($servername,$username,$password,$dbName);
            if($conn->connect_error){
                die("Connection failed: ".$conn->connect_error);
            }
        //Define columns
        $id = 0; $fname = 1; $lname = 2; $add1 = 4; $add2 = 5; $city = 6; $st = 7; $zip = 8;
        $query = $conn->query("SELECT * FROM owners");
        $data = $query->fetch_all();
?>
    <!-- Javascript -->
    <script>
        $(document).ready(function(){});
    </script>
<body>
    <?php include 'navbar.php';?>
    <div class="jumbotron text-center bg-info text-white">
        <h1>Owners</h1>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <table class="table owner-table">
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
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="fname">First Name <span id="arrow"></span></th>
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="lname">Last Name <span id="arrow"></span></th>
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="add1">Address 1 <span id="arrow"></span></th>
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="add2">Address 2 <span id="arrow"></span></th>
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="city">City <span id="arrow"></span></th>
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="st">State <span id="arrow"></span></th>
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="zip">Zip <span id="arrow"></span></th>
                        <th scope="col" data-key="notes">Notes <span id="arrow"></span></th>
                    </tr>
                </thead>
                <tbody data-tableType="owner" id="ownersTabler">
                    <?php foreach($data as $key=>$value): ?>
                        <tr>
                            <td><?= $value[$fname] ?></td>
                            <td><?= $value[$lname] ?></td>
                            <td><?= $value[$add1] ?></td>
                            <td><?= $value[$add2] ?></td>
                            <td><?= $value[$city] ?></td>
                            <td><?= $value[$st] ?></td>
                            <td><?= $value[$zip] ?></td>
                            <td><a href="#" class="notesModal" id="<?=$value[$id]?>" data-toggle="modal" data-target="#notesModal<?=$key?>">Click here</a></td>
                            <?php
                                $conn2 = new mysqli($servername,$username,$password,$dbName);
                                if($conn2->connect_error){
                                    die("Connection failed: ".$conn->connect_error);
                                }
                                // $data2 = $query->fetch_all();
                                $query2 = $conn2->query("select * from ownerNotes where ownersFk=".$value[$id]." ORDER BY date;");
                                $data2 = $query2->fetch_all();
                            ?>
                            <div id="notesModal<?=$key?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Notes Modal</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php 
                                            if(count($data2)==0){
                                                echo "There are no notes for this owner.";
                                            }
                                        ?>
                                        <?php foreach($data2 as $note): ?>

                                            <b><?=$note[3]?>|<?=$note[2]?></b><br><br>
                                            <?=$note[4]?><br><br><br>
                                        <?php endforeach; ?>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </tr>
                    <?php endforeach; ?>
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
