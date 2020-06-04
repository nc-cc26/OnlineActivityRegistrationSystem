<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/5b8eaee5c3.js" crossorigin="anonymous"></script>
</head>

<body>
</body>

</html>

<?php

include_once '../database.php';

if (isset($_POST['register'])) {
    // $varible = $POST['user input data'];
    $ID = $_POST['newID'];
    $Email = $_POST['email'];
    $Password = $_POST['newPW'];

    $emailCheck = "SELECT * FROM `user` WHERE `Email` = '$Email'";
    $idCheck = "SELECT * FROM `user` WHERE `ID` = '$ID'";

    $emailValidate = $pdo->prepare($emailCheck);
    $emailValidate->execute();

    $idValidate = $pdo->prepare($idCheck);
    $idValidate->execute();

    if ($emailValidate->rowCount() > 0 || $idValidate->rowCount() > 0) {
        if ($emailValidate->rowCount() == 0) {
            echo "<div class='alert alert-danger alert-dismissible'>
            <h4><i class='icon fa fa-exclamation-circle'></i> </ h4>
            ID is already registered before, <a href='../index.php'>log in</a> now or <a href='../index.php'>register</a> using another ID.
        </div>";
        } else if ($idValidate->rowCount() == 0) {
            echo "<div class='alert alert-danger alert-dismissible'>
            <h4><i class='icon fa fa-exclamation-circle'></i> </ h4>
            Email is already registered before, <a href='../index.php'>log in</a> now or <a href='../index.php'>register</a> using another email.
            <div class='m-3'><input class='btn btn-primary' type='submit' value='I forgot my ID.'></div>
        </div>";
        } else {
            echo "<div class='alert alert-danger alert-dismissible'>
            <h4><i class='icon fa fa-exclamation-circle'></i> </ h4>
            Email and ID are already registered before, <a href='../index.php'>log in</a> now or <a href='../index.php'>register</a> using another email and ID.
        </div>";
        }
    } else {
        $sql = "INSERT INTO `user` (`ID`, `Email`, `Password`) 
    VALUES ('$ID', '$Email', '$Password')";

        try {
            $idValidate = $pdo->prepare($sql);
            $stmt3->execute();

            echo "<div class='alert alert-success alert-dismissible'>
        <h4><i class='icon fa fa-check'></i>Great, thanks for signing up!</h4>
        Account created successfully! <a href='RegisterLogin/RegisterLogin.php'>Log In</a> now!
      </div>";
        } catch (Exception $e) {
            echo "Error: " . $e;
        }
    }

    $pdo = null;
}


if (isset($_GET['login'])) {
    $ID = $_GET('ID');
    $Password = $_GET('pw');
}
