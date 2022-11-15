
<?php include_once('script.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="userstyle.css">
  <link rel="stylesheet" href="profile.css">
  <link rel="stylesheet" href="uphotostyle.css">
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
                  <li><a href="wishlist.php">Wishlists</a></li>
                  <li><a href="mymessage.php">My Messages</a></li>           
                  <li><a href="userprofile.php">User Profile</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!--- -->

<div class="container">
        <div class="row">
            <div class="col">
                <div class="user-dashboard-box">
                    <div class="user-dashboard-sidebar">
                        <div class="user-box">
                            <img src="http://localhost/Online_Learning_Management_System/uploads/user_image/2.jpg" alt="" class="img-fluid">
                            <div class="name">
                                <div class="name">nimzy nimzy</div>
                            </div>
                        </div>
                        <div class="user-dashboard-menu">
                            <ul>
                            <li class="active"><a href="uprofile.php">Profile</a></li>
                                <li><a href="uaccount.php">Account</a></li>
                                <li><a href="uphoto.php">Photo</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="container">
       
                    
                    <div class="user-dashboard-content">
                        <div class="content-title-box">
                            <div class="title">Photo</div>
                            <div class="subtitle">Update Your Photo.</div>
                        </div>
                        <form action="http://localhost/Online_Learning_Management_System/home/update_profile/update_photo" enctype="multipart/form-data" method="post">
                            <div class="content-box">
                                <div class="email-group">
                                    <div class="form-group">
                                        <label for="user_image">Upload Image:</label>
                                        <input type="file" class="form-control" name="user_image" id="user_image">
                                    </div>
                                </div>
                            </div>
                            <div class="content-update-box">
                                <button type="submit" class="btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
             
                </div>
            </div>
        </div>
    </div>


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
                                    Login                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>








  

</body>

</html>