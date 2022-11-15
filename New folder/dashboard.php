<?php include_once('script.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="styles.css">
	<!--- boxicons --->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="sidebar">
    <div class="logo_content">
      <div class="logo" >
      <i class='bx bxl-google-cloud'></i>
      <div class="logo_name">LMS</div>
      </div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav_list">
      <li>
        <a href="#">
        
        <input type="text" placeholder="Search...">
        
        </a>

      </li>
      <li>
        <a href="#">
        <i class='bx bxs-grid-alt'></i>
        <span class="link_name">Dashboard</span>
        </a>
        
      </li>

      <li>
        <a href="#">
        <i class='bx bxl-discourse'></i>
        <span class="link_name">Course</span>
        </a>
        
      </li>

      <li>
        <a href="#">
        <i class='bx bx-male'></i>
        <span class="link_name">Student</span>
        </a>
        
      </li>

      <li>
        <a href="#">
        <i class='bx bx-chat'></i>
        <span class="link_name">Message</span>
        </a>
        
      </li>

      <li>
        <a href="#">
        <i class='bx bx-add-to-queue'></i>
        <span class="link_name">Assignment</span>
        </a>
        
      </li>   <li>
        <a href="#">
        <i class='bx bx-info-square'></i>
        <span class="link_name">Attention</span>
        </a>
        
      </li>

      <li>
        <a href="#">
        <i class='bx bx-coin-stack'></i>
        <span class="link_name">Setting</span>
        </a>
        
      </li>

  

    </ul>
    <div class="profile_content">
       <div class="profile">
        <div class="profile_detalis">
          <!--<img src="img\placeholder.png" alt="">--->
        <div class="name_job">
          <div class="name">Nimzy</div>
          <div class="job">Website</div>

        </div>
        </div>
        <i class='bx bx-log-out' id="log_out"></i>

       </div>
    </div>
    </div>
  </div>





</body>
</html>
