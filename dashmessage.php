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
                        <div class="job">Admin </div>
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
                        <div class="card-body">
                            <h4 class="page-title">
                                <i class="mdi mdi-apple-keyboard-command title_icon"></i> Message
                            </h4>
                           
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                
            </div>
            <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

                <!-- compose new email button -->
                <div class="mail-sidebar-row visible-xs">
                    <a href="#" class="btn btn-success btn-block">
                        New Message                        <i class="mdi mdi-pencil float-right"></i>
                    </a>
                </div>
                <hr>


                <!-- message user inbox list -->
                <ul class="navbar-nav">

                                    </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="card">
	<h3>
		<span class="p-3">Write New Messages</span>
	</h3>
	<div class="card-body">
		<form method="post" class="mt-2" action="#" enctype="multipart/form-data">

			<div class="form-group">
		        <div class="row">
		            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		            	<label>Recipient</label>
		            	<i class="float-right mdi mdi-reply"></i>
                        <select class="form-control select2 select2-hidden-accessible" data-toggle="select2" name="receiver" id="receiver" required="" data-select2-id="receiver" tabindex="-1" aria-hidden="true">
							

                            <?php 
                            $s=mysqli_query($con,"SELECT * FROM student");

                            
                            
                            ?>
                            <?php 

                            while($r=mysqli_fetch_array($s)){
                                ?>
                                <option value="" data-select2-id="2"   > <?php echo $r['name']; ?></option>
                            
                            <?php
                            }
                            
                            ?>



                            <optgroup label="">
                                                            </optgroup>
						</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 878.694px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-receiver-container"><span class="select2-selection__rendered" id="select2-receiver-container" role="textbox" aria-readonly="true" title="Select A User">Select A User</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
		            </div>
		        </div>
		    </div>

		    <div class="form-group">
		        <div class="row">
		            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                <textarea class="form-control" rows="5" name="message" id="message" placeholder="Type Your Message" required=""></textarea>
		            </div>
		        </div>
		    </div>

		    <div class="form-group mt-4">
		        <div class="row">
		            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-13 text-center">
		                <button type="submit" class="btn btn-success float-right">Sent Message</button>
		            </div>
		        </div>
		    </div>
		</form>
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
      

        btn.onclick = function(){
            sidebar.classList.toggle("active");
        }

        searchbtn.onclick = function(){
            sidebar.classList.toggle("active");
        }
    </script>
</body>
</html>