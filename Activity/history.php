<!DOCTYPE html>
<html>

<head>
    <style>
        button:focus {
            outline: none;
            border: none;
        }
    </style>
    <meta charset="utf-8">

    <link rel="stylesheet" href="../css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="icon" href="../imgs/8th.png" type="image/icon type">
    <title>History</title>
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
                        <a class="nav-link" href="Activity.php">Activity</a>
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

            <?php
            session_start();
            
            if (isset($_SESSION['id']) && isset($_SESSION['pw'])) {
            ?>

                <div class="col-25">
                    <div class="container">
                        <h4>Activities Registered</h4>
                        <table class="table table-bordered ">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Matric Number</th>

                                    <th>Year</th>
                                    <th>Semester</th>
                                    <th>Activities</th>
                                    <th>Status</th>
                                </tr>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <th>Mark Clarence</th>
                                    <th>WIF200001</th>
                                    <th>1</th>
                                    <th>1</th>
                                    <th><a href="Activity.php#olympics">MyCollege Olympics</a><br><a href="Activity.php#game">Gamers
                                            Guild</a></th>
                                    <th><a onclick="confirmed()" href="#">Confirmed</a></button></th>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <th>Mark Clarence</th>
                                    <th>WIF200001</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th><a href="Activity.php#talent">MyCollege Got Talent</a></th>
                                    <th><a onclick="deleted()" href="#">Failed</a></th>
                                </tr>

                                <tr>
                                    <th>3</th>
                                    <th>Mark Clarence</th>
                                    <th>WIF200001</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th><a href="Activity.php#photo">Photography Club</a></th>
                                    <th><a id="click" href="#">Click to confirm</a><button id="delete" style="margin-left: 1.5em" id="delete"><img src="../imgs/bin.jpg" height="20" width="20"></button></th>
                                </tr>
                            </tbody>
                            </thead>
                        </table>






                    </div>
                </div>
    </div>

    <script>
        function confirmed() {
            alert("You have already confirmed this registration.");
        }

        function deleted() {
            alert("You have already deleted this registration.");
        }
        var click = document.getElementById("click");
        var delButton = document.getElementById("delete");
        click.addEventListener("click", function() {
            if (click.textContent == "Click to confirm") {
                var yes = window.confirm("Are you sure to confirm this registration?");
                if (yes) {
                    click.textContent = "Confirmed";
                    delButton.remove("button");
                } else {
                    return true;
                }
            }
            if (click.textContent == "Confirmed") {
                confirmed();
            } else if (click.textContent == "Failed") {
                deleted();
            }
        });

        delButton.addEventListener("click", function() {
            var deletemou = window.confirm("Are you sure to delete this registration?");
            if (deletemou) {
                deleted();
                click.textContent = "Failed";
                delButton.remove("button");
            } else {
                return true;
            }
        });
    </script>
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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
</body>

</html>