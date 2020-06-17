<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="../css/style.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <link rel="icon" href="../imgs/8th.png" type="image/icon type">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <header class="blog-header py-3">
            <h1 class="headingfont" align="center">
                <img class="mr-1 mb-2" src="../imgs/8th.png" alt="college logo" width="45" height="45" />MyCollege
            </h1>
        </header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="Activity.php">Activity<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Sembreak.php">Semester Break</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="reportStatus.html">College Helpdesk</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-1">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../imgs/profile.png" width="18" height="18" />
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../Profile/profile.php">My Profile</a>
                            <a class="dropdown-item" href="../RegisterLogin/Logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="jumbotron mt-2">
            <h2 class="font-weight-bold">Registration for Activities</h2>
            <?php
            session_start();

            if (isset($_SESSION['logged_in']) && $_SESSION['user_id'] && $_SESSION['user_email'] && $_SESSION['logged_in'] == true) {
            ?>
                <div class="jumbotron mt-8">
                    <form action="#" method="post" id="form_id">
                        <div>
                            <label for="Name">Name:</label><br />
                            <input type="text" class="form-control" id="name" />
                        </div>

                        <div>
                            <br /><label for="Matricnumber">Matric Number:</label><br />
                            <input type="text" class="form-control" id="matricnumber" />
                        </div>

                        <div>
                            <br /><label for="Year">Year:</label><br />
                            <input type="text" class="form-control" id="year" />
                        </div>

                        <div>
                            <br /><label for="Semester">Semester:</label><br />
                            <input type="text" class="form-control" id="semester" />
                        </div>

                        <div>
                            <br /><label for="activities">Select your activities:</label><br />
                            <input type="checkbox" id="olympics" name="olympics" value="Olympics" required />
                            <label for="olympics"> MyCollege Olympics</label>
                            <p></p>
                            <br />

                            <input type="checkbox" id="game" name="game" value="Game" />
                            <label for="game"> Gamers Guild</label>
                            <p></p>
                            <br />

                            <input type="checkbox" id="language" name="language" value="Language" />
                            <label for="language"> Language and Culture Class</label><br />
                            <p></p>
                            <br />

                            <input type="checkbox" id="talent" name="talent" value="Talent" />
                            <label for="talent"> MyCollege Got Talent</label><br />
                            <p></p>
                            <br />

                            <input type="checkbox" id="photography" name="photography" value="Photography" />
                            <label for="photography"> Photography Club</label><br />
                            <p></p>
                            <br />
                        </div>
                        <div style="text-align:center">
                            <input type="button" class="btn btn-success" id="submit" value="Submit" />
                            <input type="button" class="btn btn-danger" id="cancel" value="Cancel" />
                        </div>
                    </form>
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
    <script>
        var sub = document.getElementById("submit");
        sub.addEventListener("click", function() {
            var yes = window.confirm("Are you sure to submit the registration?");
            if (yes) {
                window.location.href = "history.php";
            } else {
                return true;
            }
        });

        var can = document.getElementById("cancel");
        can.addEventListener("click", function() {
            var no = window.confirm("Are you sure to cancel the registration?");
            if (no) {
                window.location.href = "Activity.php";
            } else {
                return true;
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>