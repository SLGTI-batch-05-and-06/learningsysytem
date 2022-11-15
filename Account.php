<?php
include_once('script.php');
include_once('config.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>




  <?php include_once('nav.php') ?>
  <!-- title bar -->
  <div class="card bg-dark text-white">

        <h5 class="card-title"><i class="fa fa-home" aria-hidden="true"></i>/Sign Up </h5>
        <p class="card-text">Register Yourself</p>


      </div>
       <!-- /title bar -->


  <div class="container">
    <div class="row">

      <div class="col-sm">

      </div>
      <div class="col-sm">
        <div class="card text-Center">
          <div class="card-header">
            Registration Form </br>
            Sign up and Start Learning
          </div>
        </div>
        <?php
          if (isset($_POST['signup'])) {

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "INSERT INTO login(fname,lname,username,password) VALUES ('$fname','$lname','$username','$password')";

            if (mysqli_query($con, $sql)) {

          ?>
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> Created sucessfull !</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

          <?php

            }
          }



          ?>
        <div class="card-body">
        <form action="" method="POST">

            <div class="form-group">

              <label for="exampleInputEmail1">First name</label>
              <input type="text" class="form-control" placeholder="First name" name="fname">


              <label for="exampleInputEmail1">Last name</label>
              <input type="text" class="form-control" placeholder="Last name" name="lname">

            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>

              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <div class="card text-center">
              <input type="submit" value="Sign up" class="btn btn-danger btn-sm" name="signup">


            </div>
            <div class="card-footer">
              <div class=" text-center">
                <br />Already Have An Account?
                <a href="Login page.php">Login </a>
              </div>
            </div>





        </div>





      </div>
      <div class="col-sm">
        </form>





      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="page-footer font-small bg-dark pt-5">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">Footer Content</h5>
          <p>Here you can use rows and columns to organize your footer content.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

          <!-- Links -->


          <ul class="list-unstyled">
            <li>
              <a href="#!"></a>
            </li>
            <li>
              <a href="#!"></a>
            </li>
            <li>
              <a href="#!"></a>
            </li>
            <li>
              <a href="#!"></a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

          <!-- Links -->
          <h5 class="text-uppercase"></h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">About</a>
            </li>
            <li>
              <a href="#!">Privacy Policy</a>
            </li>
            <li>
              <a href="#!">Term & Condition </a>
            </li>
            <li>
              <a href="#!">Login</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->

    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  </div>




</body>

</html>