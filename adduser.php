<?php
if ($_SERVER['REQUEST_METHOD'] != "POST") {

}
include "dbconf.php";
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$fname = $_POST['fullname'];
$mobile = $_POST['mobile'];
$sql = "Insert into users (username,fullname, mobile, password) values ('" . $uname . "', '" . $fname . "', '" . $pass . "', '" . $mobile . "')";
$res = connect()->query($sql);
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo "id: " . $row["username"];
    }
}