
<?php include_once('script.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="userstyle.css">
  <link rel="stylesheet" href="profile.css">
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
                    <div class="user-dashboard-content">
                        <div class="content-title-box">
                            <div class="title">Profile</div>
                            <div class="subtitle">Add Information About Yourself To Share On Your Profile.</div>
                        </div>
                        <form action="http://localhost/Online_Learning_Management_System/home/update_profile/update_basics" method="post">
                            <div class="content-box">
                                <div class="basic-group">
                                    <div class="form-group">
                                        <label for="FristName">Basics:</label>
                                        <input type="text" class="form-control" name="first_name" id="FristName" placeholder="First Name" value="nimzy">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="nimzy">
                                    </div>
                                    <div class="form-group">
                                        <label for="Biography">Biography:</label>
                                        <div id="mceu_2" class="mce-tinymce mce-container mce-panel" hidefocus="1" tabindex="-1" role="application" style="visibility: hidden; border-width: 1px; width: 100%;"><div id="mceu_2-body" class="mce-container-body mce-stack-layout"><div id="mceu_3" class="mce-top-part mce-container mce-stack-layout-item mce-first"><div id="mceu_3-body" class="mce-container-body"><div id="mceu_4" class="mce-toolbar-grp mce-container mce-panel mce-first mce-last" hidefocus="1" tabindex="-1" role="group"><div id="mceu_4-body" class="mce-container-body mce-stack-layout"><div id="mceu_5" class="mce-container mce-toolbar mce-stack-layout-item mce-first mce-last" role="toolbar"><div id="mceu_5-body" class="mce-container-body mce-flow-layout"><div id="mceu_6" class="mce-container mce-flow-layout-item mce-first mce-last mce-btn-group" role="group"><div id="mceu_6-body"><div id="mceu_0" class="mce-widget mce-btn mce-first" tabindex="-1" aria-pressed="false" role="button" aria-label="Bold"><button id="mceu_0-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-bold"></i></button></div><div id="mceu_1" class="mce-widget mce-btn mce-last" tabindex="-1" aria-pressed="false" role="button" aria-label="Italic"><button id="mceu_1-button" role="presentation" type="button" tabindex="-1"><i class="mce-ico mce-i-italic"></i></button></div></div></div></div></div></div></div></div></div><div id="mceu_7" class="mce-edit-area mce-container mce-panel mce-stack-layout-item mce-last" hidefocus="1" tabindex="-1" role="group" style="border-width: 1px 0px 0px;"><iframe id="Biography_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area. Press ALT-F9 for menu. Press ALT-F10 for toolbar. Press ALT-0 for help" style="width: 100%; height: 100px; display: block;"></iframe></div></div></div><textarea class="form-control author-biography-editor" name="biography" id="Biography" style="display: none;" aria-hidden="true"></textarea>
                                    </div>
                                </div>
                                <div class="link-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control" maxlength="60" name="twitter_link" placeholder="Twitter Link" value="">
                                        <small class="form-text text-muted">Add Your Twitter Link.</small>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" maxlength="60" name="facebook_link" placeholder="Facebook Link" value="">
                                        <small class="form-text text-muted">Add Your Facebook Link.</small>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" maxlength="60" name="linkedin_link" placeholder="Linkedin Link" value="">
                                        <small class="form-text text-muted">Add Your Linkedin Link.</small>
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