<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="../css/style.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <link rel="icon" href="../imgs/8th.png" type="image/icon type">
    <title>Academic Detail</title>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="profileDetail.php">View details<span class="sr-only">(current)</span></a>
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
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="profileDetail.php">Personal</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="academicDetail.php">Academic <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactDetail.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <?php
            session_start();
            include_once '../database.php';

            if (isset($_SESSION['logged_in']) && $_SESSION['user_id'] && $_SESSION['user_email'] && $_SESSION['logged_in'] == true) {
                $id = $_SESSION['user_id'];
                $sqlPicture = "SELECT ProfilePicture FROM personaltable WHERE id='$id'";
                $resultPicture = $pdo->prepare($sqlPicture);
                $resultPicture -> execute();
                while($resPicture = $resultPicture->fetch()){
                    $ProfilePicture = $resPicture['ProfilePicture'];
                }
                $sql = "SELECT * FROM academictable WHERE id='$id'";
                $result = $pdo->prepare($sql);
                $result -> execute();

                while($res = $result->fetch(PDO::FETCH_ASSOC)) {
                    $Faculty = $res['Faculty'];
                    $Course = $res['Course'];
                    $EntryYear = $res['EntryYear'];
                    $Duration = $res['Duration'];
                    $Mode = $res['Mode'];
                }
                ?>
                <div class="text-center">
                    <?php
                        if(empty($ProfilePicture)){
                    ?>
                            <img src="../imgs/profile.png" alt="User profile picture" style="width: 200px; height: 200px; border: 1px solid Gray;"/>
                    <?php
                        }else{
                    ?>
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($ProfilePicture); ?>" alt="User profile picture" style="width: 200px; height: 200px; border: 1px solid Gray;"/>
                    <?php
                        }
                    ?>
                </div>
                <table class="table table-striped">
                    <tr><th scope="row" class="w-25 p-3">Faculty:</th><td><?php echo $Faculty; ?> </td></tr>
                    <tr><th scope="row" class="w-25 p-3">Course:</th><td><?php echo $Course; ?> </td></tr>
                    <tr><th scope="row" class="w-25 p-3">Entry Year:</th><td><?php echo $EntryYear; ?></td></tr>
                    <tr><th scope="row" class="w-25 p-3">Duration:</th><td><?php echo $Duration; ?></td></tr>
                    <tr><th scope="row" class="w-25 p-3">Mode:</th><td><?php echo $Mode; ?></td></tr>
                </table>
                <div class="text-left">
                    <button id="confirm" type="button" class="btn btn-primary btn-sm">
                        Update Academic Information
                    </button>
                </div>
                <script type="text/javascript">
                    var button = document.getElementById("confirm");
                    button.addEventListener("click", function() {
                        var x = confirm("Are you sure to update academic information?");
                        if (x) window.location.href = "updateAcademic.php";
                        else return false;
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>