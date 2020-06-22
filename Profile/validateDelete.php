<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="../css/style.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <link rel="icon" href="../imgs/8th.png" type="image/icon type" />
    <title>Delete User Account</title>
</head>

<body>
    <div class="container">
        <header class="blog-header py-3">
            <h1 class="headingfont" align="center">
                <img class="mr-1 mb-2" src="../imgs/8th.png" alt="college logo" width="45" height="45" />MyCollege
            </h1>
        </header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">My Profile</a>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="profileDetail.php">View details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="updatePersonal.php">Update details</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-1">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../imgs/profile.png" width="18" height="18" />
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../Activity/Activity.php">Activity</a>
                            <a class="dropdown-item" href="../Activity/Sembreak.php">Semester Break</a>
                            <a class="dropdown-item" href="../Activity/Report.php">Report an Issue</a>
                            <a class="dropdown-item" href="../RegisterLogin/Logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="jumbotron mt-2">
            <h1>Delete User Account</h1>
            <?php
            session_start();
            include_once '../database.php';

            if (isset($_SESSION['logged_in']) && $_SESSION['user_id'] && $_SESSION['user_email'] && $_SESSION['logged_in'] == true) {
                $id = $_SESSION['user_id'];

            ?>
            <?php
                $action=isset($_GET['action']) ? $_GET['action'] : "";
                if($action == "invalidPassword"){
                    echo "<div class='alert alert-danger alert-dismissible'>
                    <h4><i class='icon fa fa-check'></i>Account deletion failed. <br> Your password is invalid! <br>Please try again.
                    </div>";
                }
            ?>

                <form method="post" action="delete.php" onsubmit="return validateForms()" id="form" class="jumbotron mt-3">
                    <div class="form-group row">
                        <label for="password" class="col-md-3 col-form-label"><b>*Enter Current Password </b></label>
                        <div class="col-md-3">
                            <input id="password" name="password" class="form-control" type="password" placeholder="PASSWORD" required>
                            <input type="checkbox" onclick="myFunction()"> Show Password
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary" id="confirm">Confirm</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary" id="cancel">Cancel</button>
                        </div>
                    </div>
                <?php
            } else { ?>
                    <div class="alert alert-info" role="alert">
                        <h4>Sorry, only authenticated user can access this page.</h4>
                        <p><a href="../RegisterLogin/RegisterLogin.php">Log in</a> now.</p>
                    </div><?php
                        }
                            ?>
        </main>

        <footer class="container text-center font-italic py-2">
            Copyright © 2020 - XXX Residential College.
        </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript">
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        document.getElementById("cancel").addEventListener("click", function() {
            window.location.href = "profile.php";
        })

        function validateForms() {
            var confirm = window.confirm("Confirm to delete your user account permanently?");
            if (!confirm) {
                return false;
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>