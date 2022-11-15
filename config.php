<?php 

$con=mysqli_connect('localhost','root','','lms');

if(mysqli_connect_error())
{
    echo "Connetion error :".mysqli_connect_error();

}