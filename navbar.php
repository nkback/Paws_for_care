<?php
    if(isset($_SESSION["error"])){
        echo "<div class='alert alert-danger alert-dismissible fade show' style='margin-bottom: 0'>";
            echo $_SESSION["error"] . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        echo "</div>";
        unset($_SESSION['error']);
    }
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><i class="fas fa-paw"></i> Paws To Care</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li id="homeNav" class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php if($_SESSION["admin"] && $_SESSION["login"]) : ?>
                <li id="dogsNav" class="nav-item">
                    <a class="nav-link" href="dogs.php">Dogs</a>
                </li>
                <li id="catsNav" class="nav-item">
                    <a class="nav-link" href="cats.php">Cats</a>
                </li>
                <li id="exoticsNav" class="nav-item">
                    <a class="nav-link" href="exotics.php">Exotics</a>
                </li>
                <li id="ownersNav" class="nav-item">
                    <a class="nav-link" href="owners.php">Owners</a>
                </li>
            <?php elseif($_SESSION["login"]) : ?>
                <li id="animalsNav" class="nav-item">
                    <a class="nav-link" href="animals.php">Pets</a>
                </li>
            <?php endif; ?>
            <li id="contactNav" class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li id="aboutNav" class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>  -->
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <?php 
                if(!$_SESSION["login"])
                    echo '<a class="nav-link" data-toggle="modal" data-target="#loginModal" href="#">Login</a>';
                else
                    echo '<a class="nav-link" href="logout.php">Logout</a>';
                ?>
            </li>
        </ul>
    </div>
</nav>
<div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form type="post" action="/authenticate.php">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <label for="username">Username:</label>
                    <input id="username" name="username" type="text" class="form-control" required>
                    <label for="password">Password:</label>
                    <input id="password" name="password" type="password" class="form-control" required>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default" formmethod="post" formaction="/authenticate.php">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        var queryString = window.location.href.split('/');
        if(queryString[queryString.length-1] === '' || queryString[queryString.length-1] === 'index.php'){
            // $('.active').removeClass('active');
            $('#homeNav').addClass('active');
        }
        else if(queryString[queryString.length-1] === 'about.php'){
            // $('.active').removeClass('active');
            $('#aboutNav').addClass('active');
        }
        else if(queryString[queryString.length-1] === 'cats.php'){
            // $('.active').removeClass('active');
            $('#catsNav').addClass('active');
        }
        else if(queryString[queryString.length-1] === 'contact.php'){
            // $('.active').removeClass('active');
            $('#contactNav').addClass('active');
        }
        else if(queryString[queryString.length-1] === 'dogs.php'){
            // $('.active').removeClass('active');
            $('#dogsNav').addClass('active');
        }
        else if(queryString[queryString.length-1] === 'exotics.php'){
            // $('.active').removeClass('active');
            $('#exoticsNav').addClass('active');
        }
        else if(queryString[queryString.length-1] === 'animals.php'){
            // $('.active').removeClass('active');
            $('#animalsNav').addClass('active');
        }
        else if(queryString[queryString.length-1] === 'owners.php'){
            // $('.active').removeClass('active');
            $('#ownersNav').addClass('active');
        }
    });
</script>