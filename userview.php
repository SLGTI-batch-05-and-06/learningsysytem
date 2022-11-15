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

                <div class="table">
                    <table style="width:100% ;">
                        <thead class="table table-striped">
                            <tr>

                                <th scope="col">Course No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Title</th>
                                <th scope="col">lecturar</th>
                                



                            </tr>
                        </thead>

                        <tbody>
                            <!--- Table view --->
                            <?php

                            $sql = 'SELECT * FROM course';
                            $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<tr>
                                            <td>', $row['courseno'], '</td>
                                            <td>', $row['name'], '</td>
                                            <td>', $row['title'], '</td>
                                            <td>', $row['lecturar'], '</td>

                                           
                                            
                                            
                                            ';
                                }
                            } else {

                                echo "no rows";
                            }


                        
                            ?>
                            

                        </tbody>


                    </table>
                </div>
                <!--- Table view --->

                <!--- -->

                <div class="col-lg-6">
                    <div class="my-course-filter-bar filter-box">
                        <span>Filter By</span>
                        <div class="btn-group">
                            <a class="btn btn-outline-secondary dropdown-toggle all-btn" href="#" data-toggle="dropdown">
                                Categories </a>

                            <div class="dropdown-menu">
                            </div>
                        </div>
                        <!-- <div class="btn-group">
                        <a class="btn btn-outline-secondary dropdown-toggle" href="#"data-toggle="dropdown">
                            Instructors                        </a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"> </a>

                        </div>
                    </div> -->
                        <div class="btn-group">
                            <a href="#" class="btn reset-btn" disabled="">Reset</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="my-course-search-bar">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search My Courses" onkeyup="getCoursesBySearchString(this.value)">
                                <div class="input-group-append">
                                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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