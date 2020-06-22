<?php
session_start();
include_once('../database.php');

if(isset($_SESSION['logged_in']) && $_SESSION['user_id'] 
&& $_SESSION['user_email'] && $_SESSION['logged_in'] == true){
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['password'])){
        $ID = $_SESSION['user_id'];
        $Password = $_POST['password'];

        $passwordCheck = "SELECT * FROM `user` WHERE `ID`='$ID'";
        $stmt = $pdo->prepare($passwordCheck);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            $hashPassword = $row['Password'];
        }
        $verify = validatePassword($Password,$hashPassword);

        if($verify == true){
        $sql0 = "DELETE FROM `user` WHERE `ID`='$ID'";
        $sql1 = "DELETE FROM `academictable` WHERE `ID`='$ID'";
        $sql2 = "DELETE FROM `contacttable` WHERE `ID`='$ID'";
        $sql3 = "DELETE FROM `personaltable` WHERE `ID`='$ID'";
        $sql4 = "DELETE FROM `activitytable` WHERE `ID`='$ID'";
        $sql5 = "DELETE FROM `accomodationapplicationtable` WHERE `ID`='$ID'";
        $sql6 = "DELETE FROM `report_table` WHERE `ID`='$ID'";
        try{
            $stmt0 = $pdo->prepare($sql0);
            $stmt1 = $pdo->prepare($sql1);
            $stmt2 = $pdo->prepare($sql2);
            $stmt3 = $pdo->prepare($sql3);
            $stmt4 = $pdo->prepare($sql4);
            $stmt5 = $pdo->prepare($sql5);
            $stmt6 = $pdo->prepare($sql6);
            
            $stmt0->execute();
            $stmt1->execute();
            $stmt2->execute();
            $stmt3->execute();
            $stmt4->execute();
            $stmt5->execute();
            $stmt6->execute();
            header('Location:deletedAccount.php');
        } catch (Exception $e) {
            echo "Error: " . $e;
        }
        }else{
            header("Location:../Profile/validateDelete.php?action=invalidPassword");
        }
    }
    }
}
function validatePassword($Password, $hashPassword){
    $salt = "roA&h2u!PoaWr2u";

    $password = hash("sha256", $Password . $salt);

    if ($password == $hashPassword) {
    //if(password_verify($Password,$hashPassword)){
        return true;
    } else {
        return false;
    }
}
?>
