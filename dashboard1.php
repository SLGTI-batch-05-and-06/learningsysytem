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
                <a href="#">
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
            <div class="row ">
              
            </div>
             
            <!-- end col  agfdsgadsgdfa-->

            <div class="content-page">
                <div class="content">
                    <!-- BEGIN PlACE PAGE CONTENT HERE -->
                    <div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Dashboard</h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title mb-4">Admin Revenue This Year</h4>

                <div class="mt-3 chartjs-chart" style="height: 320px;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                    <canvas id="task-area-chart" width="742" style="display: block; height: 320px; width: 660px;" class="chartjs-render-monitor" height="360"></canvas>
                </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row">
    <div class="col-12">
        <div class="card widget-inline">
            <div class="card-body p-0">
                <div class="row no-gutters">
                    <div class="col-sm-6 col-xl-3">
                        <a href="dashcourse.php" class="text-secondary">
                            <div class="card shadow-none m-0">
                                <div class="card-body text-center">
                                    <i class="dripicons-archive text-muted" style="font-size: 24px;"></i>

                                    <?php 
                                    $sql="SELECT id from course ORDER BY id ";
                                    $result = mysqli_query($con, $sql);

                                    $row = mysqli_num_rows($result);
                                    echo '<h3>'.$row.'</h3>';

                                    
                                    ?>

                                    <h3></h3>
                                    <p class="text-muted font-15 mb-0">Number of Courses</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <a href="dashcourse.php" class="text-secondary">
                            <div class="card shadow-none m-0 border-left">
                                <div class="card-body text-center">
                                    <i class="dripicons-camcorder text-muted" style="font-size: 24px;"></i>

                                    <?php 
                                    $sql="SELECT id from student ORDER BY id ";
                                    $result = mysqli_query($con, $sql);

                                    $row = mysqli_num_rows($result);
                                    echo '<h3>'.$row.'</h3>';

                                    
                                    ?>


                                    <h3></h3>
                                    <p class="text-muted font-15 mb-0">Number Of Student</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <a href="dashstudent.php" class="text-secondary">
                            <div class="card shadow-none m-0 border-left">
                                <div class="card-body text-center">
                                    <i class="dripicons-network-3 text-muted" style="font-size: 24px;"></i>
                                    <h3></h3>
                                    <?php 
                                    $sql="SELECT id from course ORDER BY id ";
                                    $result = mysqli_query($con, $sql);

                                    $row = mysqli_num_rows($result);
                                    echo '<h3>'.$row.'</h3>';

                                    
                                    ?>
                                    <p class="text-muted font-15 mb-0">Number Of Lecturar</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    

                </div> <!-- end row -->
            </div>
        </div> <!-- end card-box-->
    </div> <!-- end col-->
</div>


<script type="text/javascript">
    $('#unpaid-instructor-revenue').mouseenter(function() {
        $('#go-to-instructor-revenue').show();
    });
    $('#unpaid-instructor-revenue').mouseleave(function() {
        $('#go-to-instructor-revenue').hide();
    });
</script>
                    <!-- END PLACE PAGE CONTENT HERE -->
                </div>
            </div>



            </div>

 
    
    </div>
  
    

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