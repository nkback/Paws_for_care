<?php include 'header.php' ?>
    <!-- Javascript -->
    <script>
        $(document).ready(function(){
            // $('.notesModal').click(function(){
            //     console.log("here");
            //     $('#notesModal').modal();
            // });
            // $('.ownersModal').click(function(){
            //     $('#ownerModal').modal();
            // });
            $.ajax({
                 url:'/jsonData.php',
                 data: {type: 'exotics'},
                 type: 'get',
                 success: function(output){
		     var data = JSON.parse(output);
                     generateExoticTable(data);
                 }
             })
            var sortableHolder;
            // generateExoticTable(animalData.exotics);
            $("input").change(function(){
                let key = $(this).attr("data-key");
                let value = _.upperFirst($(this).val());
                var filteredArray = animalData.exotics.filter(function(animalArr){
                    if(key === "name"){
                        return animalArr.name.startsWith(value);
                    }
                    else if(key === "species"){
                        return animalArr.species.startsWith(value);
                    }
                    else if(key === "sex"){
                        return animalArr.sex.startsWith(value);
                    }
                    else if(key === "owners"){
                        return animalArr.owners.startsWith(value);
                    }
                    else if(key === "notes"){
                        return animalArr.notes.startsWith(value);
                    }
                })
                document.getElementById("exoticTable").innerHTML = "";
                generateExoticTable(filteredArray);
            });

            $(".sortable").click(function(){
                let key = $(this).attr("data-key");
                if(key === sortableHolder){
                    if($(this).find("#arrow").attr("class") == "down"){
                        $(this).find("#arrow").html("&uarr;");
                        $(this).find("#arrow").attr("class", "up");
                    }
                    else {
                        $(this).find("#arrow").html("&darr;");
                        $(this).find("#arrow").attr("class", "down");                
                    }
                }
                else {
                    $(".up").removeClass("up").html("");
                    $(".down").removeClass("down").html("");
                    $(this).find("#arrow").attr("class", "down");
                    $(this).find("#arrow").html("&darr;");
                }
                if(key === "name"){
                    if(key === sortableHolder){
                        document.getElementById("exoticTable").innerHTML = "";
                        generateExoticTable(animalData.exotics.reverse());
                    }
                    else{
                        document.getElementById("exoticTable").innerHTML = "";
                        generateExoticTable(animalData.exotics.sort(function(a,b){
                            var varA = a.name.toLowerCase(), varB=b.name.toLowerCase();
                            if(varA < varB) return -1;
                            if(varA > varB) return 1;
                            return 0;
                        }));
                    }
                    sortableHolder = key;
                }
                else if(key === "species"){
                    if(key === sortableHolder){
                        document.getElementById("exoticTable").innerHTML = "";
                        generateExoticTable(animalData.exotics.reverse());
                    }
                    else{
                        document.getElementById("exoticTable").innerHTML = "";
                        generateExoticTable(animalData.exotics.sort(function(a,b){
                            var varA = a.species.toLowerCase(), varB=b.species.toLowerCase();
                            if(varA < varB) return -1;
                            if(varA > varB) return 1;
                            return 0;
                        }));
                    }
                    sortableHolder = key;
                }
                else if(key === "sex"){
                    if(key === sortableHolder){
                        document.getElementById("exoticTable").innerHTML = "";
                        generateExoticTable(animalData.exotics.reverse());
                    }
                    else{
                        document.getElementById("exoticTable").innerHTML = "";
                        generateExoticTable(animalData.exotics.sort(function(a,b){
                            var varA = a.sex.toLowerCase(), varB=b.sex.toLowerCase();
                            if(varA < varB) return -1;
                            if(varA > varB) return 1;
                            return 0;
                        }));
                    }
                    sortableHolder = key;
                }
                else if(key === "age"){
                    if(key === sortableHolder){
                        document.getElementById("exoticTable").innerHTML = "";
                        generateExoticTable(animalData.exotics.reverse());
                    }
                    else{
                        document.getElementById("exoticTable").innerHTML = "";
                        generateExoticTable(animalData.exotics.sort(function(a,b){
                            if(parseInt(a.age) < parseInt(b.age)) return -1;
                            if(parseInt(a.age) > parseInt(b.age)) return 1;
                            return 0;
                        }));
                    }
                    sortableHolder = key;
                }
                else if(key === "owners"){
                    if(key === sortableHolder){
                        document.getElementById("exoticTable").innerHTML = "";
                        generateExoticTable(animalData.exotics.reverse());
                    }
                    else{
                        document.getElementById("exoticTable").innerHTML = "";
                        generateExoticTable(animalData.exotics.sort(function(a,b){
                            var varA = a.owners.toLowerCase(), varB=b.owners.toLowerCase();
                            if(varA < varB) return -1;
                            if(varA > varB) return 1;
                            return 0;
                        }));
                    }
                    sortableHolder = key;
                }
                else if(key === "notes"){
                    if(key === sortableHolder){
                        document.getElementById("exoticTable").innerHTML = "";
                        generateExoticTable(animalData.exotics.reverse());
                    }
                    else{
                        document.getElementById("exoticTable").innerHTML = "";
                        generateExoticTable(animalData.exotics.sort(function(a,b){
                            var varA = a.notes.toLowerCase(), varB=b.notes.toLowerCase();
                            if(varA < varB) return -1;
                            if(varA > varB) return 1;
                            return 0;
                        }));
                    }
                    sortableHolder = key;
                }
            });
            
        });
    </script>
<body>
    <?php include 'navbar.php' ?>
    <div class="jumbotron text-center bg-info text-white">
        <h1>Exotics</h1>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"><div class="col-sm-12" style="padding-left: 0"><input data-key="name" type="text" placeholder="filter" class="form-control"></div></th>
                        <th scope="col"><div class="col-sm-12" style="padding-left: 0"><input data-key="species" type="text" placeholder="filter" class="form-control"></div></th>
                        <th scope="col"><div class="col-sm-12" style="padding-left: 0"><input data-key="sex" type="text" placeholder="filter" class="form-control"></div></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <!-- <th scope="col"><div class="col-sm-12" style="padding-left: 0"><input data-key="owners" type="text" placeholder="filter" class="form-control"></div></th> -->
                        <!-- <th scope="col"><div class="col-sm-12" style="padding-left: 0"><input data-key="notes" type="text" placeholder="filter" class="form-control"></div></th> -->
                    </tr>
                    <tr>
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="name">Name <span id="arrow"></span></th>
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="species">Species <span id="arrow"></span></th>
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="sex">Sex <span id="arrow"></span></th>
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="neutered">Neutered <span id="arrow"></span></th>
                        <th scope="col" style="cursor: pointer" class="sortable" data-key="age">Age <span id="arrow"></span></th>
                        <th scope="col" data-key="owners">Owners <span id="arrow"></span></th>
                        <th scope="col" data-key="notes">Notes <span id="arrow"></span></th>
                    </tr>
                </thead>
                <tbody data-tableType="exotics" id="exoticTable">
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
                Coming soon..
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
                Coming soon..
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