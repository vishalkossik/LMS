<?php
$uid = $_POST['user_id'];
$pass = $_POST['password'];

$con = new mysqli('localhost', 'vishal','vishal', 'lms');  //establishing connection/session with a database
if($con->connect_error) {
    echo connect_error;
} else {

    $sql = "SELECT * FROM user WHERE user_id='$uid' AND password='$pass'";

    $result =  $con->query($sql);

    if($result->num_rows > 0) {
        echo "<script>window.location.href='Dashboard.php'</script>";
    } else {
        echo "<script>alert('Invalid userid/password')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
 }