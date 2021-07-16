<?php
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("location:login.php");
}
include "dbconf.php";
$user = $_POST["user"];
$pass = hash("sha256", "ofd" . $_POST["pass"]);
$sql = "Select * from users where username='" . $user . "' and password = '" . $pass . "' and active = TRUE";
$res = connect()->query($sql);
if ($res->num_rows > 0) {
    if ($row = $res->fetch_assoc()) {
        session_start();
        $_SESSION['uid'] = $row['id'];
        header("location:index.php");
    }
} else {
    echo '<script>
alert("incorrect! Username and password");
window.location = "login.php";
</script>';
}
