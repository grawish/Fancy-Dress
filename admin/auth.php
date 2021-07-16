<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    header('location: login.php');
}
include '../dbconf.php';
$username = $_POST['user'];
$password = hash("sha256","ofd", $_POST['pass']);
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND admin = TRUE AND active = TRUE";
$res = connect()->query($sql);
if ($res->num_rows > 0){
    if ($row = $res->fetch_assoc()){
        session_start();
        $_SESSION['uid'] = $row['id'];
        header('location: index.php');
    }
} else {
    echo '<script>
        alert("Invalid username or password");
        window.location = "login.php";
    </script>';
}