<?php
if ($_SERVER['REQUEST_METHOD'] != "POST") {

}
include "dbconf.php";
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$fname = $_POST['fullname'];
$mobile = $_POST['mobile'];
$sql = "Insert into users (username,fullname, mobile, password) values ('" . $uname . "', '" . $fname . "', '" . $pass . "', '" . $mobile . "')";

if (connect()->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . connect()->error;
}
