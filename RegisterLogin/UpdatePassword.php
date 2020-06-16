<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../imgs/8th.png" type="image/icon type" />
    <title>Process Form</title>
    <link rel="stylesheet" href="../css/style.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/5b8eaee5c3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
</body>

</html>

<div class="container-fluid">
    <header class="blog-header py-3">
        <h1 class="headingfont" align="center">
            <img class="mr-1 mb-2" src="../imgs/8th.png" alt="college logo" width="45" height="45" />MyCollege
        </h1>
    </header>
    <div class="jumbotron">

        <?php
        include_once "../database.php";
        if (isset($_POST['password'])) {
            $code = $_POST['code'];

            $stmt = $pdo->prepare("SELECT * FROM `reset_password` WHERE `Code`='$code'");

            $stmt->execute();

            $row = $stmt->fetch();

            $pw = $_POST['password'];

            $salt = "roA&h2u!PoaWr2u";
            $hash = hash("sha256", $pw . $salt);

            $email = $row['Email'];

            try {
                $updatePW = $pdo->prepare("UPDATE `user` SET `Password`='$hash' WHERE `Email`='$email'")->execute();

                echo "<div class='alert alert-success alert-dismissible'>
            <h4><i class='icon fa fa-check'> Done updating password.</i></h4>
            <a href='RegisterLogin.php'>Log In</a> now!";
            } catch (Exception $e) {
                echo "<div class='alert alert-danger alert-dismissible'>
                <h4><i class='icon fa fa-exclamation-circle'> Something went wrong.</i></h4>
                <p>Please <a href='ResetPassword.php'>try again</a>.</p>";
            }
        } else if (isset($_GET['code'])) {
            $code = $_GET["code"];
        ?>
            <form method="post" class="form-group">
                <input type="hidden" name="code" value="<?php echo $code ?>">

                <label for="password">
                    <i class="fas fa-key"> New Password: </i>
                </label>
                <input class="form-control" id="password" type="password" name="password" placeholder="Enter new password">

                <input id="reg-btn" class="m-3 d-flex justify-content-center submit-btn text-light fas fa-key" type="submit" name="reset-password" value="&#xf1d8 Submit" />
            </form>
        <?php
        } else {
        }


        ?>
    </div>
</div>