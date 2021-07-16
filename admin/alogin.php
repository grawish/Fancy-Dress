<?php
session_start();
if (isset($_SESSION['uid'])) {
    header("location:index.php");
}
include "../includes/header.php";
head("Home",true);
?>
    <main class="page login-page">
        <section class="clean-block clean-form dark"
                 style="background: linear-gradient(-69deg, var(--indigo), var(--red));">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info" style="font-weight: bold;">Log In</h2>
                </div>
                <form action="auth.php" method="post">
                    <div class="form-group"><label for="user">Username</label><input class="form-control item"
                                                                                     type="text" name="user"
                                                                                     id="user"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control"
                                                                                         type="password" name="pass"
                                                                                         id="password"></div>
                    <br>
                    <button class="btn btn-primary btn-block" type="submit">Log In</button>
                    <div class="form-row">
                        <div class="col">
                            <div>
                                <p style="text-align: center;margin-top: 13px;margin-right: auto;margin-left: auto;">
                                    Don't have an account? <a href="registration.php">Create One Here!</a></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
<?php
include "includes/footer.php";
