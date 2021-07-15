<?php
function navbar($home = "", $shop = "", $contact = "", $about_us = "", $login = "")
{
    echo '<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Fancy Dress Booking</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link ' . $home . '" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link ' . $shop . '" href="catalog-page.php">Shop</a></li>
                    <li class="nav-item"><a class="nav-link ' . $contact . '" href="contact-us.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link ' . $login . '" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>';
}

function navbaruser($home = "", $shop = "", $contact = "", $about_us = "", $login = "")
{
    include "dbconf.php";
    $username = "";
    $sql = "Select * from users where id=" . $_SESSION['uid'];
    $res = connect()->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $username = $row['username'];
        }
    }
    echo '<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Fancy Dress Booking</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link ' . $home . '" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link ' . $shop . '" href="catalog-page.php">Shop</a></li>
                    <li class="nav-item"><a class="nav-link ' . $contact . '" href="contact-us.php">Contact Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ' . $username . '
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>';
}

function adminnavbar($logout = "block", $admin = "none")
{
    if (isset($_SESSION['uid'])) {
        include "../dbconf.php";
        $sql = "Select * from users where id=" . $_SESSION['uid'];
        $res = connect()->query($sql);
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $admin = $row['admin'];
            }
        }
    }
    echo '
<nav class="navbar navbar-light navbar-expand-lg bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#">Admin Panel</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">';
    if ($admin) {
        echo '<ul class="nav navbar-nav ml-auto mr-1">
                <li class="nav-item" style="display: ' . $admin . '"><a class="nav-link" >Sign Up a User</a></li>
            </ul>';
    }
    if (isset($_SESSION['uid'])) {
        echo '<ul class="nav navbar-nav ml-auto">
                <li class="nav-item" style="display: ' . $logout . '"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>';
    }
    echo '</div>
    </div>
</nav>';

}

?>