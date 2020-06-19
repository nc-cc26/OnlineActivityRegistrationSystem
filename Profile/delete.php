<?php
session_start();
include_once '../database.php';

if(isset($_SESSION['logged_in']) && $_SESSION['user_id'] 
&& $_SESSION['user_email'] && $_SESSION['logged_in'] == true){
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $ID = $_SESSION['user_id'];
        echo $ID;

        $sql0 = "DELETE FROM `user` WHERE `ID`='$ID'";
        $sql1 = "DELETE FROM `academictable` WHERE `ID`='$ID'";
        $sql2 = "DELETE FROM `contacttable` WHERE `ID`='$ID'";
        $sql3 = "DELETE FROM `personaltable` WHERE `ID`='$ID'";
        $sql4 = "DELETE FROM `activitytable` WHERE `ID`='$ID'";
        try{
            $stmt0 = $pdo->prepare($sql0);
            $stmt1 = $pdo->prepare($sql1);
            $stmt2 = $pdo->prepare($sql2);
            $stmt3 = $pdo->prepare($sql3);
            $stmt4 = $pdo->prepare($sql4);
            
            $stmt0->execute();
            $stmt1->execute();
            $stmt2->execute();
            $stmt3->execute();
            $stmt4->execute();
            header('Location:deletedAccount.php');
        } catch (Exception $e) {
            echo "Error: " . $e;
        }
    }
}
?>
