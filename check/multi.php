<?php
  $user = "";
  $pass = "";
  $validated = false;

  if ($_POST)
  {
    $user = $_POST['username'];
    $pass = $_POST['password'];
  }

  session_start();
  $_SESSION['login'] = "";
  if($user!="" && $pass!="")
  {
    $conn = mysql_connect ("localhost", "root", "") or die ("Sorry - unable to connect to MySQL database.");
    $rs = mysql_select_db ("admin", $conn) or die ("error");
    $sql = "SELECT * FROM user WHERE username = '$user' AND password = '$pass'";
    $rs = mysql_query($sql,$conn);
    $result = mysql_num_rows($rs);

    if ($result > 0) $validated = true;
    if($validated)
    {
      $_SESSION['login'] = "OK";
      $_SESSION['username'] = $user;
      $_SESSION['password'] = $pass;
      header('Location: protected.php');
    }
    else
    {
      $_SESSION['login'] = "";
      echo "Invalid username or password.";
    }
  }
  else $_SESSION['login'] = "";
?>