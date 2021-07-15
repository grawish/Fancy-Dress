<?php
session_start();
if (isset($_SESSION['uid'])) {
    header("location:catalog-page.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "dbconf.php";
    $uname = $_POST['uname'];
    $pass = hash("sha256", "ofd" . $_POST['pass']);
    $mobile = $_POST['mobile'];
    $fname = $_POST['fullname'];

    $sql = "Insert into users (username,fullname, mobile, password) values ('" . $uname . "', '" . $fname . "', '" . $mobile . "', '" . $pass . "')";
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
        window.open("index.php","_self");
        </script>
        ';
    }
}


include "includes/header.php";
head("Home");
navbar();
?>

    <main class="page registration-page">
        <section class="clean-block clean-form dark"
                 style="background: linear-gradient(68deg, var(--indigo), var(--red));">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"
                        style="color: var(--blue);filter: hue-rotate(0deg) saturate(200%);font-weight: bold;">
                        Registration</h2>
                </div>
                <form method="post">
                    <div class="form-group"><label for="name">Full Name</label><input class="form-control item"
                                                                                      type="text"
                                                                                      id="name" name="fullname"></div>
                    <div class="form-group"><label for="uname">Username</label><input class="form-control item"
                                                                                      type="text"
                                                                                      id="uname" name="uname"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control item"
                                                                                         type="password" id="password"
                                                                                         name="pass"></div>
                    <div class="form-group"><label for="cpassword">Confirm Password</label><input
                                class="form-control item"
                                type="password"
                                id="cpassword"></div>
                    <div class="form-group"><label for="mobile">Mobile</label><input class="form-control item"
                                                                                     type="tel"
                                                                                     id="mobile" name="mobile"></div>
                    <button class="btn btn-primary btn-block" id="submit" type="submit">Sign Up
                    </button>
                </form>
            </div>
        </section>
    </main>
<?php
include "includes/footer.php";
?>