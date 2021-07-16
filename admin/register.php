<?php
session_start();
if (!isset($_SESSION['uid'])){
    header("location: login.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "../dbconf.php";
    $uname = $_POST['username'];
    $pass = hash("sha256", "ofd" . $_POST['pass']);
    $mobile = $_POST['mobile'];
    $fname = $_POST['fullname'];

    $sql = "Insert into users (username,fullname, mobile, password, admin) values ('" . $uname . "', '" . $fname . "', '" . $mobile . "', '" . $pass . "', 1)";
    $result = connect()->query($sql);
    if ($result == true) {
        echo '
        <script>
        alert("User Has Been Added Successfully!");
        window.open("index.php","_self");
        </script>
        ';
    } else {
        echo '
        <script>
        alert("An Error Occured!");
        window.open("register.php","_self");
        </script>
        ';
    }
}
include './includes/header.php';
include 'includes/nav.php';
navbar(register:"active");
?>
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/dogs/image2.jpeg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            <form class="user" action="register.php" method="post">
                                <div class="mb-3"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="fullName" placeholder="Full Name" name="fullname"></div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" placeholder="Username" name="username"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="tel" placeholder="Mobile" name="mobile"></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="pass"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password"></div>
                                </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Register Account</button>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>