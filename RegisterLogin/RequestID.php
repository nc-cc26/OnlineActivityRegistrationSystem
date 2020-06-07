<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/5b8eaee5c3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
</body>

</html>

<?php
include_once "../database.php";
if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $sql = "SELECT * FROM `user` WHERE `Email` = '$email'";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch();

    if ($row) {
        extract($row);

        echo "<div class='alert alert-info alert-dismissible'>
                    <h4><i class='fas fa-search'> Here's what we found!</i></i></h4><p>The ID for <strong>$email</strong> is <strong>$ID</strong>.</p>
                    <a href='RegisterLogin.php'>Log In</a> now or <a href='RegisterLogin.php'>register</a> using another email.";
    } else {
        echo "<div class='alert alert-danger alert-dismissible'>
                    <h4><i class='fas fa-question'> The email is not registered.</i></h4><p>The <strong>$email</strong>  seems to be missing in the database.</p>
                    <a href='RegisterLogin.php'>Register</a> now or <a href='RegisterLogin.php'>log in</a> using another email.";
    }
} else { ?>
    <div class="container-fluid">
        <form method="get" action="RequestID.php">
            <div>
                <label for="email">Enter your email here: </label>
                <input id="email" name="email" type="email" class="input-field" placeholder="Enter email" required />
                <span id="new-email-err" style="color: red;"></span>
            </div>

            <input class="submit-btn fas fa-image text-light" type="submit" value="&#xf1d8 Submit" />
        </form>
    </div>
<?php
}


?>