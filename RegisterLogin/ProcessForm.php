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
    if (!empty($_POST['newID']) && $_POST['email'] && $_POST['newPW']) {
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
                <h4><i class='icon fa fa-exclamation-circle'> ID is already registered before.</i></h4>
                <a href='RegisterLogin.php'>Log in</a> now or <a href='RegisterLogin.php'>register</a> using another ID.
            </div>";
            } else if ($idValidate->rowCount() == 0) {
                echo "<div class='alert alert-danger alert-dismissible'>
                <h4><i class='icon fa fa-exclamation-circle'> Email is already registered before.</i></h4>
                <div class='mb-3'><a href='RegisterLogin.php'>Log in</a> now or <a href='RegisterLogin.php'>register</a> using another email.</div>
                <div><h4><i class='fas fa-question'> Forgot your ID?</i></h4><a href='RequestID.php?email=$Email' class='btn btn-primary rounded-pill'><i class='fas fa-eye'> Find it now!</i></a></div>
            </div>";
            } else {
                echo "<div class='alert alert-danger alert-dismissible'>
                <h4><i class='icon fa fa-exclamation-circle'> Email and ID are already registered before.</i></h4>
                <a href='RegisterLogin.php'>Log in</a> now or <a href='RegisterLogin.php'>register</a> using another email and ID.
            </div>";
            }
        } else {
            $sql = "INSERT INTO `user` (`ID`, `Email`, `Password`) 
        VALUES ('$ID', '$Email', '$Password')";

            try {
                $idValidate = $pdo->prepare($sql);
                $idValidate->execute();

                echo "<div class='alert alert-success alert-dismissible'>
            <h4><i class='icon fa fa-check'></i> Great, thanks for signing up!</h4>
            Account created successfully! <a href='RegisterLogin.php'>Log In</a> now!
          </div>";
            } catch (Exception $e) {
                echo "Error: " . $e;
            }
        }
        $pdo = null;
    } else {
        echo "<div class='alert alert-danger alert-dismissible'>
                <h4><i class='icon fa fa-exclamation-circle'> Invalid information entered.</i></h4>Please
                 <a href='RegisterLogin.php'>try again</a>.
            </div>";
    }
}


if (isset($_POST['login'])) {
    $ID = $_POST['ID'];
    $Password = $_POST['pw'];

    $check = "SELECT * FROM `user` WHERE `ID`='$ID' AND `Password` = '$Password'";

    $stmt = $pdo->prepare($check);
    $stmt->execute();
    $row = $stmt->fetch();

    if ($row) {
        if (isset($_POST['checkbox'])) {
            $_SESSION['id'] = $ID;
            $_SESSION['pw'] = $Password;
        }
        header("Location:/Assignment/Activity/activity.html");
    } else {
        header('Location:RegisterLogin.php?msg=login_failed');
    }
}
