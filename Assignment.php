<?php
include_once('config.php');
include_once('script.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userstyle.css">
    <title>Document</title>
</head>

<body>
    <?php include_once('nav.php') ?>

    <section class="page-header-area my-course-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="page-title">My Courses</h1>
                    <ul>
                        <li class="active"><a href="userview.php">All Courses</a></li>
                        <li><a href="wishlist.php">Attendance</a></li>
                        <li><a href="mymessage.php">My Messages</a></li>
                        <li><a href="Assignment.php">Assignment</a></li>
                        <li><a href="userprofile.php">User Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!--- -->
    <section class="my-courses-area">
        <div class="container">
            <div class="row align-items-baseline">


                <!--- -->



                <div class="row ">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                        <form action="#" enctype="multipart/form-data" method="post">
                            <div class="content-box">
                                <div class="email-group">
                                    <div class="form-group">
                                        <label for="user_image">Upload File:</label>
                                        <input type="file" class="form-control" name="user_image" id="user_image">
                                    </div>
                                </div>
                            </div>
                            <div class="content-update-box">
                                <button type="submit" class="btn">Submit</button>
                            </div>
                        </form>
                           
                           
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                
                
            </div>

           <!-- end file-->

            <div class="row ">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                        <form action="#" enctype="multipart/form-data" method="post">
                            <div class="content-box">
                                <div class="email-group">
                                    <div class="form-group">
                                        <label for="user_image">Recivice File:</label>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="content-update-box">
                               
                            </div>
                        </form>
                           
                           
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                
                
            </div>
          
                







               
                <!--- Table view --->

                <!--- -->
                

               
            </div>
            
            <div class="row no-gutters" id="my_courses_area">
            </div>
        </div>
        
    </section>


    <footer class="footer-area">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-6">
                    <p class="copyright-text">
                        <a href=""><img src="lms.png" alt="" class="d-inline-block" width="110"></a>
                        <a href="#" target="_blank"></a>
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="nav justify-content-md-end footer-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Terms &amp; Condition</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Login </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>










</body>

</html>