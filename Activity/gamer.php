<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="../css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="icon" href="imgs/8th.png" type="image/icon type">
    <title>List of Activities</title>
</head>

<body>
    <div class="container">

        <header class="blog-header py-3">
            <h1 class="headingfont" align="center"><img class="mr-1 mb-2 " src="../imgs/8th.png" alt="college logo" width="45" height="45">MyCollege</h1>
        </header>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="Activity.php">Activity<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="Sembreak.php">Semester Break</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Report.php">Report an Issue</a>
                    </li>

                </ul>
                <ul class="navbar-nav mr-1">
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../imgs/profile.png" width="18" height="18">
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

            <h2 class="font-weight-bold ">Activities of MyCollege</h2>

            <?php
            session_start();

            if (isset($_SESSION['logged_in']) && $_SESSION['user_id'] && $_SESSION['user_email'] && $_SESSION['logged_in'] == true) {
            ?>
                

                <p class="spaceP">
                    <a name="game" class="font-weight-bold ">
                        <font size="5">Gamers Guild</font>
                    </a>
                    <p>
                        <font size="2" style="font-weight: bold">&#42Available every week</font>
                    </p>
                    <p>
                        The Gamers Guild is a community of individuals united by their common interest in online gaming, board games,
                        and video games. Whether you are looking for an entertaining match among friends, or a competitive tournament
                        against the other Residential Colleges, the Gamers Guild is the group for you.
                    </p>
                    <div style="text-align:center">
                        <img src="../imgs/midone.jpg" style="width:40%" id="gamerpics"><br><br>
                        <button class="btn btn-primary" id="nextG">Next Photo</button>
                    </div>
                </p>


        <br><br>

        <p class="spaceP">
            <div style="text-align:center">
                <a href="register.php"><button class="btn btn-primary">Register Now</button></a>&emsp;<a href="activity.php"><button class="btn btn-primary">Back</button></a>
            </div>
        </p>

        </main>

        </div>
    <?php } else { ?>
        <div class="alert alert-info" role="alert">
            <h4>Sorry, only authenticated user can access this page.</h4>
            <p><a href="../RegisterLogin/RegisterLogin.php">Log in</a> now.</p>
        </div><?php } ?>

    <footer class="container text-center font-italic py-2">
        Copyright © 2020 - XXX Residential College.
    </footer>

    <script>
        var gamerpics = [
            "../imgs/midone.jpg",
            "../imgs/miracle.jpg",
            "../imgs/boardgames.jpg"
        ];

        var btnG = document.getElementById("nextG");
        var imgG = document.getElementById("gamerpics");
        var counterG = 1;

        btnG.addEventListener("click", function() {
            if (counterG === 3) {
                counterG = 0;
            }
            imgG.src = gamerpics[counterG];
            counterG++;
        });

    </script>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>