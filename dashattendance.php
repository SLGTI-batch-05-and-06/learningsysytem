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
            <div class="row ">
                <div class="col-xl-12">
                    <div class="card">

                    </div> <!-- end card -->
                </div><!-- end col-->

            </div>

            <!-- end col-->
            <div class="row ">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="page-title">
                                <i class="mdi mdi-apple-keyboard-command title_icon"></i> Attendance
                            </h4>

                        </div> <!-- end card body-->
                        <div class="card-body">

                            <?php
                            $code = null;
                            $date = null;


                            if (isset($_POST['add'])) // insert code php 
                            {
                                $code = $_POST['code'];
                                $date = $_POST['date'];




                                $sql = "INSERT INTO attendance(code,date) VALUES ('$code','$date')";

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



                            ?>
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-sm-6">
                                        Code : </br> <input type="text" class="form-control" name="code" value="<?php echo $code ?>" require>

                                    </div>
                                    <div class="col-sm-6">

                                        date : </br> <input type="date" class="form-control" name="date" value="<?php echo $dete ?>" require>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">

                                        <input type="submit" value="Sent" class="btn btn-primary btn-sm" name="add">


                                    </div>
                                    <div class="col-sm-6">



                                    </div>
                                </div>


                                <!-- end col-->
                                <div class="row ">
                                    <div class="col-xl-12">
                                        <div class="card">

                                            <div class="card-body">
                                                <div class="table">
                                                    <table style="width:100% ;">
                                                        <thead class="table table-striped">
                                                            <tr>
                                                                <th scope="col">Code</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Student_Regno</th>
                                                                <th scope="col">Course No</th>
                                                                <th scope="col">Name</th>



                                                            </tr>
                                                        </thead>
                                                </div>
                                                <tbody>



                                            </div> <!-- end card body-->
                                        </div> <!-- end card -->
                                    </div><!-- end col-->

                                </div>

                        </div>
                    </div>

                    <script type="text/javascript">
                        function check_receiver() {
                            var check_receiver = $('#receiver').val();
                            if (check_receiver == '' || check_receiver == 0) {
                                toastr.error("Please select a receiver", "Error");
                                return false;
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>

    <!---- 
    
    
    --->

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