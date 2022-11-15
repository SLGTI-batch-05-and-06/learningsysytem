<?php

include_once('script.php');
include_once('config.php');

?>

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

  <div class="card bg-dark text-white">

    <h5 class="card-title"><i class="fa fa-home" aria-hidden="true"></i>/Login </h5>
    <p class="card-text">Registraed User</p>


  </div>



  <div class="container">
    <div class="row">


    </div>
    <div class="row">
      <div class="col-sm">

      </div>
      <div class="col-sm">
        <div class="card text-center">
          <div class="card-header">
            Admin
            Login </br>
            Provide Your Valid Login Credentials.
          </div>
        </div>
        <div class="card-body">


          <?php


          if (isset($_POST['signin'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM login WHERE username='$username'";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) == 1) {
              $r = mysqli_fetch_assoc($result);
              if ($password == $r['password']) {


                header("location:dashboard1.php");
              } else {




          ?>
                <div class="alert alert-warning alert-anger fade show" role="alert">
                  <strong> Correct Password !</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>





              <?php
              }
            } else {

              ?>
              <div class="alert alert-warning alert-anger fade show" role="alert">
                <strong> User not found !</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>


          <?php
            }
          }







          ?>


          <form action="" method="POST">
            <div class="form-group">

              <label for="exampleInputEmail1">Username</label>

              <input type="email" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="Username">



            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <div class="card text-center">
              <input type="submit" value="Login" class="btn btn-danger" name="signin">


            </div>
            <div class="card-footer">
              <div class=" text-center">
                or <a href="##">Forgot Password </a>
                <br />Do Not Have An Account?
                <a href="Account.php">Sign Up </a>
              </div>
            </div>





        </div>
        </form>




      </div>
      <div class="col-sm">






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






</body>

</html>