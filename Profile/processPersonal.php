<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/5b8eaee5c3.js" crossorigin="anonymous"></script>
</head>

<body>
</body>

</html>

<?php
session_start();
include_once('../database.php');
if(isset($_SESSION['logged_in']) && $_SESSION['user_id'] 
&& $_SESSION['user_email'] && $_SESSION['logged_in'] == true){
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $ID = $_SESSION['user_id'];
        if(isset($_POST['ProfilePicture']) && 
        isset($_POST['Name']) && isset($_POST['NewMatrics']) && 
        isset($_POST['IC']) && isset($_POST['Nationality']) && 
        isset($_POST['Gender']) && isset($_POST['Birthday']) ){
            $ProfilePicture = $_POST['ProfilePicture'];
            $Name = $_POST['Name'];
            $NewMatrics = $_POST['NewMatrics'];
            $IC = $_POST['IC'];
            $Nationality = $_POST['Nationality'];
            $Gender = $_POST['Gender'];
            $Birthday = $_POST['Birthday'];
            $Race = $_POST['Race'];
            $Religion = $_POST['Religion'];
            $Marital = $_POST['Marital'];

            $sql = "UPDATE `personaltable` SET `ProfilePicture`='$ProfilePicture', `Name`='$Name', 
            `IC`='$IC', `Nationality`='$Nationality', 
            `Gender`='$Gender', `Birthday`='$Birthday', 
            `Race`='$Race', `Religion`='$Religion', 
            `Marital`='$Marital' WHERE `ID`='$ID'";

            try{
            $updateValue = $pdo->prepare($sql);
            $updateValue -> execute();
            header("Location:../Profile/updatePersonal.php?action=updatePersonalSuccessful");
            //echo "<div class='alert alert-success alert-dismissible'>
            //<h4><i class='icon fa fa-check'></i> Update personal information
            //is successful! <a href='profile.html'>View updated information</a> now!
            //</div>";

            }catch (Exception $e){
                echo "Error: " . $e;
            }
        }
//}
}
}
?>