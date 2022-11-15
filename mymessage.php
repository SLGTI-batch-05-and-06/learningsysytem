<?php include_once('script.php') ?>

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
    <section class="message-area">
        <div class="container">
            <div class="row no-gutters align-items-stretch">
                <div class="col-lg-5">
                    <div class="message-sender-list-box">
                        <button class="btn compose-btn" type="button" id="NewMessage" onclick="NewMessage(event)">Compose</button>
                        <hr>
                        <ul class="message-sender-list">

                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="message-details-box" id="toggle-1">
                        <div class="text-center empty-box">Select A Message Thread To Read It Here.</div>
                    </div>
                    <div class="message-details-box" id="toggle-2" style="display: none;">
                        <div class="new-message-details">
                            <div class="message-header">
                                <div class="sender-info">
                                    <span class="d-inline-block">
                                        <i class="far fa-user"></i>
                                    </span>
                                    <span class="d-inline-block">New Message</span>
                                </div>
                            </div>
                            <form class="" action="#" method="post">
                                <div class="message-body">
                                    <div class="form-group">
                                        <select class="form-control select2 select2-hidden-accessible" name="receiver" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option value="1" data-select2-id="3">admin admin</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-receiver-su-container"><span class="select2-selection__rendered" id="select2-receiver-su-container" role="textbox" aria-readonly="true" title="admin admin">admin admin</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn send-btn">Send</button>
                                    <button type="button" class="btn cancel-btn" onclick="CancelNewMessage(event)">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="message-area">
        <div class="container">
            <div class="row no-gutters align-items-stretch">
                <div class="col-lg-5">
                    <div class="message-sender-list-box">
                        <button class="btn compose-btn" type="button" id="NewMessage" onclick="NewMessage(event)">Compose</button>
                        <hr>
                        <ul class="message-sender-list">

                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="message-details-box" id="toggle-1">
                        <div class="text-center empty-box">Select A Message Thread To Read It Here.</div>
                    </div>
                    <div class="message-details-box" id="toggle-2" style="display: none;">
                        <div class="new-message-details">
                            <div class="message-header">
                                <div class="sender-info">
                                    <span class="d-inline-block">
                                        <i class="far fa-user"></i>
                                    </span>
                                    <span class="d-inline-block">New Message</span>
                                </div>
                            </div>
                            <form class="" action="#" method="post">
                                <div class="message-body">
                                    <div class="form-group">
                                        <select class="form-control select2 select2-hidden-accessible" name="receiver" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option value="1" data-select2-id="3">admin admin</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-receiver-su-container"><span class="select2-selection__rendered" id="select2-receiver-su-container" role="textbox" aria-readonly="true" title="admin admin">admin admin</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn send-btn">Send</button>
                                    <button type="button" class="btn cancel-btn" onclick="CancelNewMessage(event)">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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