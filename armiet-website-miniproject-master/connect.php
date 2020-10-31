<?php
$connection = mysqli_connect('localhost', 'id7482130_praveen', 'Friends<>?');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'id7482130_contact');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
