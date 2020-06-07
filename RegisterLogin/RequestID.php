<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/5b8eaee5c3.js" crossorigin="anonymous"></script>
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

    extract($row);

    echo "<div class='alert alert-info alert-dismissible'>
                <h4><i class='fas fa-search'></i> Here's what we found!</i></h4><p>The ID for <strong>$email</strong> is <strong>$ID</strong>.</p>
                <a href='RegisterLogin.php'>Log In</a> now or <a href='RegisterLogin.php'>register</a> using another email.";
}


?>