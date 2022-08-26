<?php 
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- style sheet navbar -->
    <link rel="stylesheet" href="navbar.css"/>
    <!--Logo for the page tabs --> 
    <link rel="shortcut icon" type="image/png" href="img/branding/favicon.png"> 
    <title>Validus</title>
</head>
<body>
    <script type="text/javascript">
        function ShowModal(id)
        {
            var modal = document.getElementById(id);
            modal.classList.add("show");
            modal.removeAttribute("aria-hidden");
            modal.style.display = "block";
        }
        function CloseModal(id, boxID)
        {
            var modal = document.getElementById(id);
            var error = document.getElementById(boxID);

            modal.classList.remove("show");
            modal.setAttribute("aria-hidden", "true");
            modal.style.display = null;
            $.post( "hidden/logout.hdn.php")
            error.innerHTML = ""; 
        }
    </script>

<div class="jumbotron col-12" id="header">
    <img src="img/branding/favicon.png" id="logo-mobile" alt="">
    <a href="index.php"><img id="validus" src="img/branding/logoHeader.png" class="img-fluid"></a> <!--logo links to home page -->
    <h4 id="head">"I am strong, I am healthy, I am powerful"</h4>
  
</div>
<!-- changes navbar into hamburger menu for mobile devices -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark"> 
    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target"> 
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="collapse_target"> 
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Exercises</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="exercise.php">Where to start?</a>
                        <a class="dropdown-item" href="recommended.php">Recommended Routine</a>
                        <a class="dropdown-item" href="minimalist.php">Minimalist Routine</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="equipment.php"> Equipment Needed</a>
                        </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alternative Exercises</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="yoga.php">Yoga</a>
                        <a class="dropdown-item" href="running.php">Running</a>
                        <a class="dropdown-item" href="hiking.php">Hiking</a>
                        </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Food</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="food.php">Macros Explained</a>
                            <a class="dropdown-item" href="losing.php">Losing Weight</a>
                            <a class="dropdown-item" href="bulking.php">Bulking</a>
                        </div>
                </li>
                <li class="nav-item active">
                    <a href="help.php" class="nav-link">Help</a>
                </li>
    
             
            </ul>

            <?php //if the user is logged in they will see the profile and logout options on the navbar   
            if(isset($_SESSION["useruid"])){
                ?>
                <ul class="navbar-nav"><a class="nav-link active" id="profile" href="profile.php">Profile</a></ul>
                <ul class="navbar-nav ml-auto"><a class="nav-link active" id="log-out" href="hidden/logout.hdn.php">Log Out</a></ul>
                <?php
            } 
            else{ //if the user is not logged in they will see the sign up or log in option ?>
            <ul class="navbar-nav ml-auto"><li class="nav-item mr-auto"> 
               <li>
               <a class="nav-link active" href="#" data-toggle="modal" data-target="#loginModal">Log In</a>
               </li>
               <li class="nav-item">  
               <a class="nav-link active" href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a>
               </li>
            </ul>
            <?
            }
            ?>                 
        </div>
</nav>

<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signUp" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <a href="index.php"> <img id="form-logo" src="img/branding/logoForm.png" alt=""></a>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="CloseModal('signupModal', 'error')">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<div class="modal-body">
    <section class="section-default">
        <form action="hidden/signup.hdn.php" method="post"> <!--linked to he signup.hdn.php .hdn indicates it's back end -->
            <div class="col">
                <div class="form-group">
                <p id="warning">*Once signup has been completed you need to then log in.</p>
                    <div>
                        <div class="col">
                            <input type="text" name="name" class="form-control" placeholder="Full name..."> <!-- user id-->
                        </div>
                    </div>
                        <div>
                        <div class="col">
                            <input type="text" name="email" class="form-control" placeholder="Email..."> <!-- email-->
                        </div>
                        </div>

                        <div>
                            <div class="col">
                                <input type="text" name="uid" class="form-control" placeholder="Username..."> <!-- password-->
                            </div>
                        </div>   

                        <div>
                            <div class="col">
                                <input type="password" name="pwd" class="form-control" placeholder="Password..."> <!-- password-->
                            </div>
                        </div>

                        <div>
                            <div class="col">
                                <input type="password" name="pwdrepeat" class="form-control" placeholder="Enter password again...">
                            </div>
                        </div>

                        <div>
                            <hr>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" required>
                            <label class="form-check-label" for="invalidCheck3">
                            Agree to <a href="terms.php"> terms and conditions</a></label>
                            <hr>
                        </div>
                            <div class="col">
                                <button type-="submit" class="btn btn-warning col-sm-12" name="submit" id="form-btn" class="form-control" >Signup</button>                                                                 
                            </div>
                        </div> 
                </div>
            </div>
        </form>

    <?php
    if (isset($_SESSION["error"])) {
        if($_SESSION["error"] != "none")
        {
            ?>
            <script type="text/javascript">
                ShowModal("signupModal");
            </script>
            <?php
        }
    if ($_SESSION["error"] == "emptyinput") {
        echo ' <hr> <p id="error">Fill in all fields!</p>';
    }
    else if ($_SESSION["error"] == "invaliduid"){
        echo '<hr> <p id="error"> Choose a proper username!</p>';
    }
    else if ($_SESSION["error"] == "invalidemail") {
        echo '<hr> <p id="error"> Choose a proper email!</p>';
    }

    else if ($_SESSION["error"] == "passwordsdontmatch") {
        echo '<hr> <p  id="error"> Passwords do not match!</p>'; 
    }

    else if ($_SESSION["error"] == "stmtfailed"){
        echo '<hr> <p  id="error"> Oops something went wrong. Please try again</p>';

    }
    else if ($_SESSION["error"] == "usernametaken"){
        echo '<hr> <p  id="error"> Sorry username already exists</p>';
    }
    else if ($_SESSION["error"] == "none") {
        echo '<hr><p id="successful"> Congratulations! You have signed up!</p><a href="index.php"><button class="btn btn-success">Continue</button></a>';
    }
    }
    ?>
    </section>   
</div>
<div class="modal-footer">
    <hr> 
     <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="CloseModal('signupModal', 'error')">Close</button>
</div>
        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <a href="index.php"> <img id="form-logo" src="img/branding/logoForm.png" alt=""></a>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="CloseModal('loginModal', 'lerror')">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<section class="section-default">
    <div class="login-form ">
        <form  action="hidden/login.hdn.php" method="post"> 
            <div class="col">
                <div class="form-group">
                    <div>
                        <div class="col">                                       
                            <input type="text" name="uid" class="form-control" placeholder="Username..."> <!-- user id-->
                        </div>
                    </div>
                    
                    <div>
                        <div class="col">
                            <input type="password" name="pwd" class="form-control" placeholder="Password..."> <!-- password-->
                        </div>
                    </div>

                    <div>
                        <div class="col">
                            <button type-="submit" id="form-btn" class="btn btn-secondary col-sm-12" name="submit" class="form-control" >Log In</button> 
                        </div>
        </form>
    </div>
    <?php
        if (isset($_SESSION["lerror"])) {
            ?>
            <script>
                ShowModal("loginModal");
            </script>
            <?php
            if ($_SESSION["lerror"] == "emptyinput") {
                echo "<p id='lerror'>Fill in all fields!</p>";
            }
            else if ($_SESSION["lerror"] == "wronglogin"){
                echo "<p id='lerror'>Incorrect login details</p>";
            }
        }
    ?>
</section>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>