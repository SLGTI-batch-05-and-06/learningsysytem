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
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>


    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class="bx bxl-c-plus-plus"></i>
                <div class="logo_name">LMS</div>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>

                <i class="bx bx-search">
                    <input type="text" placeholder="search">
                </i>


                <!--<span class="tooltip">Dashboard</span>-->
            </li>
            <li>
                <a href="dashboard1.php">
                    <i class="bx bx-grid-alt"></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="dashcourse.php">
                    <i class="bx bx-cart-alt"></i>
                    <span class="link_name">Course</span>
                </a>
                <span class="tooltip">Course</span>
            </li>
            <li>
                <a href="dashstudent.php">
                    <i class="bx bx-user"></i>
                    <span class="link_name">Student</span>
                </a>
                <span class="tooltip">Student</span>
            </li>
            <li>
                <a href="dashmessage.php">
                    <i class="bx bx-chart"></i>
                    <span class="link_name">message</span>
                </a>
                <span class="tooltip">message</span>
            </li>
            <li>
                <a href="dashattendance.php">
                    <i class="bx bx-pie-chart-alt-2"></i>
                    <span class="link_name">Attendance</span>
                </a>
                <span class="tooltip">Attendance</span>
            </li>
            <li>
                <a href="dashassignment.php">
                    <i class='bx bx-add-to-queue'></i>
                    <span class="link_name">Assignment</span>
                </a>
                <span class="tooltip">Assignment</span>
            </li>

            <li>
                <a href="dashsetting.php">
                    <i class="bx bx-cog"></i>
                    <span class="link_name">settings</span>
                </a>
                <span class="tooltip">settings</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <imag class="../leaveimg/hrms-im.jpg" alt="">
                        <div class="name_job">
                            <div class="name">Nimzy Am</div>
                            <div class="job">Admin</div>
                        </div>
                </div>
                <a href="index.php"><i class="bx bx-log-out" id="log_out"> </i></a>
            </div>
        </div>
    </div>
    <div class="home_content">
        <div class="text">
            <div class="container">
                <?php
                $regno = null;
                $name = null;
                $email = null;
                $username = null;
                $password = null;



                if (isset($_POST['save'])) // insert code php 
                {
                    $regno = $_POST['student_id'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];


                    $sql = "INSERT INTO student(student_id,name,email,username,password) VALUES ('$regno','$name','$email','$username','$password')";

                    if (mysqli_query($con, $sql)) {

                ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong> Insert sucessfull !</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <?php

                    } else {

                        echo "Error :" . mysqli_error($con);
                    }
                }




                //delete
                if (isset($_GET['delete'])) {

                    $id = $_GET['delete'];

                    $sql = "DELETE FROM student WHERE id=$id";

                    if (mysqli_query($con, $sql)) {

                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong> delete sucessfull !</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
    
                    <?php
    
                        } else {
    
                            echo "Error :" . mysqli_error($con);
                        }
                    }
                

                //edit  
                if (isset($_GET['edit'])) {
                    $id = $_GET['edit'];
                    $sql = "SELECT * FROM student WHERE id=$id";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) == 1); {
                        $r = mysqli_fetch_assoc($result);

                        $regno = $r['student_id'];
                        $name = $r['name'];
                        $email = $r['email'];
                        $username = $r['username'];
                        $password = $r['password'];
                    }
                }

                //update

                if (isset($_POST['update'])) {
                    $regno = $_POST['student_id'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $sql = "UPDATE student set name='$name',email='$email',username='$username',password='$password' WHERE student_id='$regno' ";

                    if (mysqli_query($con, $sql)) {

                    ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong> Update sucessfull !</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                <?php

                    } else {

                        echo "Error :" . mysqli_error($con);
                    }
                }




                ?>
                <div class="row ">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="page-title">
                                    <i class="mdi mdi-apple-keyboard-command title_icon"></i> Student
                                </h4>

                            </div> <!-- end card body-->
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            Student Reg : </br> <input type="text" class="form-control" name="student_id" value="<?php echo $regno ?>" require>

                                        </div>
                                        <div class="col-sm-6">

                                            Email : </br> <input type="text" class="form-control" name="email" value="<?php echo $email ?>" require>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            Name : </br> <input type="text" class="form-control" name="name" value="<?php echo  $name ?>" require>

                                        </div>
                                        <div class="col-sm-6">
                                            Username : </br> <input type="text" class="form-control" name="username" value="<?php echo $username ?>" require>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">


                                        </div>
                                        <div class="col-sm-6">
                                            Password : </br> <input type="password" class="form-control" name="password" require>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">


                                        </div>
                                        <div class="col-sm-6">
                                            </br>
                                            <?php
                                            if (isset($_GET['edit'])) {

                                            ?>

                                                <input type="submit" value="Update" class="btn btn-primary btn-sm" name="update">











                                            <?php


                                            } else {


                                            ?>


                                                <input type="submit" value="Add Student" class="btn btn-primary btn-sm" name="save">





                                            <?php


                                            }









                                            ?>








                                        </div>


                                    </div>











                                </form>






                            </div><!-- end card -->
                        </div> <!-- end card -->

                        <div class="card-header">
                            Student Info
                        </div>
                        <div class="card-body">
                            <div class="table">
                                <table style="width:100% ;">
                                    <thead class="table table-striped">
                                        <tr>

                                            <th scope="col">Student_Regni</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Password</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                            </div>
                            <tbody>
                                <!--- Table view --->
                                <?php

                                $sql = 'SELECT * FROM student';
                                $result = mysqli_query($con, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<tr>
                                            <td>', $row['student_id'], '</td>
                                            <td>', $row['name'], '</td>
                                            <td>', $row['email'], '</td>
                                            <td>', $row['username'], '</td>
                                            <td>', $row['password'], '</td>
                                            <td>
                                            <a href="?edit=', $row['id'], '" class="btn btn-primary btn-sm">Edit</a> |  <a href="?delete=', $row['id'], '" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                            ';
                                    }
                                } else {

                                    echo "no rows";
                                }


                                ?>


                            </tbody>


                            </table>
                        </div>


                    </div>


                </div><!-- end col-->

            </div>
        </div>







        <script>
            let btn = document.querySelector("#btn");
            let sidebar = document.querySelector("#sidebar");


            btn.onclick = function() {
                sidebar.classList.toggle("active");
            }

            searchbtn.onclick = function() {
                sidebar.classList.toggle("active");
            }
        </script>
</body>

</html>