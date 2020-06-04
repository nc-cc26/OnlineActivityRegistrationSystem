<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/5b8eaee5c3.js" crossorigin="anonymous"></script>
</head>

<body>
</body>

</html>

<?php

include_once 'database.php';

if (isset($_POST['register'])) {
    // $varible = $POST['user input data'];
    $ID = $_POST['newID'];
    $Email = $_POST['email'];
    $Password = $_POST['newPW'];

    $testIDsql = "SELECT id FROM user WHERE id='$ID'";
    $testEmailsql = "SELECT id FROM user WHERE id='$Email'";

    $IDrs = mysqli_query($conn, $testIDsql);
    $Emailrs = mysqli_query($conn, $testEmailsql);

    $IDdata = mysqli_fetch_array($IDrs, MYSQLI_NUM);
    $Emaildata = mysqli_fetch_array($Emailrs, MYSQLI_NUM);


    if (isset($IDdata[0]) || isset($Emaildata[0])) {
        echo "<div class='alert alert-danger alert-dismissible'>
        Account already exists! <a href='RegisterLogin/RegisterLogin.php'>Log In</a> now!
      </div>";
    } else {
        $sql = "INSERT INTO user (ID, Email, Password) 
    VALUES ('$ID', '$Email', '$Password')";

        try {
            mysqli_query($conn, $sql);

            echo "<div class='alert alert-success alert-dismissible'>
        <h4><i class='icon fa fa-check'></i>Great, thanks for signing up!</h4>
        Account created successfully! <a href='RegisterLogin/RegisterLogin.php'>Log In</a> now!
      </div>";
        } catch (Exception $e) {
            echo "Error: " . $sql . "<br>" . $e;
        }
        mysqli_close(($conn));
    }
}

if (isset($_GET['login'])) {
    $ID = $_GET('ID');
    $Password = $_GET('pw');
}
