<?php include 'header.php' ?>
   
    <!-- Javascript -->
    <script>
        $(document).ready(function(){
            
        });
    </script>
<body>
    <?php include 'navbar.php' ?>
    <div class="jumbotron text-center bg-info text-white">
        <h1>Contact Us</h1>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <form action="#">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="(555)-555-5555">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="5"></textarea>
                </div>
                <button type="button" class="btn btn-default float-right">Send</button>
            </form>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <h2>Office Hours</h2>
            <p>Monday 7:00am-5:30pm</p>
            <p>Tuesday 7:00am-5:30pm</p>
            <p>Wednesday 7:00am-5:30pm</p>
            <p>Thursday 7:00am-5:30pm</p>
            <p>Friday 7:00am-5:30pm</p>
            <p>Saturday 9:00am-1:00pm</p>
            <p>Sunday Closed</p>
            <h2>Address</h2>
            <p>45678 North Parkway Dr.</p>
            <p>Suite 330</p>
            <p>Provo, UT</p>
            <p>84601</p>
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