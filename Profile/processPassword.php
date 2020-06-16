<?php
session_start();
include_once('../database.php');

if(isset($_SESSION['logged_in']) && $_SESSION['user_id'] 
&& $_SESSION['user_email'] && $_SESSION['logged_in'] == true){
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_SESSION['user_id'];
        if(isset($_POST['password']) && isset($_POST['newpassword'])
        && isset($_POST['repeatpassword']) ){

            $Password = $_POST['password'];
            $passwordCheck = "SELECT `Password` FROM `user` WHERE `ID`='$id'";
            $stmt = $pdo->prepare($passwordCheck);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
                $hashPassword = $row['Password'];
            }
            validatePassword($Password,$hashPassword);
            

        }
//}
}
}
function validatePassword($Password, $hashPassword){
    $salt = "roA&h2u!PoaWr2u";

    $password = hash("sha256", $Password . $salt);

    if ($password == $hashPassword) {
    //if(password_verify($Password,$hashPassword)){
        header("Location:../Profile/profile.php?action=passwordChanged");
    } else {
        header("Location:../Profile/changePassword.php?action=invalidPassword");
    }
}
?>