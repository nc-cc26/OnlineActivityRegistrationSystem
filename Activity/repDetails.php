<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php

session_start();
include_once('../database.php');
if(isset($_SESSION['logged_in']) && $_SESSION['user_id'] 
&& $_SESSION['user_email'] && $_SESSION['logged_in'] == true){
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){

        $repNo = intval($_GET['repNo']);
        $_SESSION["selectedrepNo"] = $repNo;;
        $sql = "SELECT * FROM `report_table` WHERE (`reportno`='$repNo')";
            try{
            $select = $pdo->prepare($sql);
            $select -> execute();
            $details=$select->fetch(PDO::FETCH_ASSOC);
            echo 
            '   <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content ">

                            <div class="modal-header text-center " style="background-color: #F8F9FA;">
                            <h4 class="modal-title w-100">Report Summary</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <div id="details" class="modal-body">
                            <p id="report_sum" >Report number:
                                <p style="font-weight: normal;">'.$details['reportno'].'</p>
                            </p>
                            <p id="report_sum">Name:
                                <p style="font-weight: normal;">'.$details['Name'].'</p>
                            <p id="report_sum">Location:
                                <p style="font-weight: normal;">'.$details['Location'].'</p> 
                            </p>
                            <p id="report_sum">Title:
                                <p style="font-weight: normal;">'.$details['Title'].'</p>
                            </p>
                            <p id="report_sum">Type:
                                <p style="font-weight: normal;">'.$details['Type'].'</p>
                            </p>
                            <p id="report_sum">Description:
                                <p style="font-weight: normal;">'.$details['Description'].'</p> 
                            </p>
                            <p id="report_sum">Status:
                                <p style="font-weight: normal;">'.$details['status'].'</p>
                            </p>
                            </div>
                                <div class="modal-footer">';
                                    
                                            if ($details["status"]=="Pending") {
                                                echo'
                                                <p align="right">
                                            <form action="editReport.php" method="post">
                                                <button name="editNum" class="btn btn-primary" value="'.$repNo.'">Edit Report</button>
                                            </form>
                                            
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#cancelModal" value="'.$repNo.'">Cancel Report</button>
                                            
                                         </p>';
                                         
                                         
                              echo '      
                            </div>

                        </div>
                    </div>
                    <div class="modal fade" id="cancelModal" tabindex="-1"   >
                        <div class="modal-dialog modal-dialog-centered" >
                            <div class="modal-content">

                                <div class="modal-header text-center " style="background-color: #FF695E;">
                                    <h4 class="modal-title w-100">Cancel Report Comfirmation</h4>
                                    
                                </div>
                                
                                <div  class="modal-body text-center">
                                   Are you sure you want to cancel this report?
                                   <br>
                                   <br>
                                </div>
                                <div class="modal-footer">
                                    <p align="right">
                                        <form method="post" action="cancelRep.php">
                                        <button class="btn btn-danger" name="cancelRep" value="">Yes</button>
                                        </form>
                                        <button data-dismiss="modal" class="btn btn-outline-danger" >No</button>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div> 



                                 

                    ';}

             }catch (Exception $e){
                echo "Error: " . $e;
            
        }
    }
}




// $q = intval($_GET['q']);

// $con = mysqli_connect('localhost','peter','abc123','my_db');
// if (!$con) {
//   die('Could not connect: ' . mysqli_error($con));
// }

// mysqli_select_db($con,"ajax_demo");
// $sql="SELECT * FROM user WHERE id = '".$q."'";
// $result = mysqli_query($con,$sql);

// echo "<table>
// <tr>
// <th>Firstname</th>
// <th>Lastname</th>
// <th>Age</th>
// <th>Hometown</th>
// <th>Job</th>
// </tr>";
// while($row = mysqli_fetch_array($result)) {
//   echo "<tr>";
//   echo "<td>" . $row['FirstName'] . "</td>";
//   echo "<td>" . $row['LastName'] . "</td>";
//   echo "<td>" . $row['Age'] . "</td>";
//   echo "<td>" . $row['Hometown'] . "</td>";
//   echo "<td>" . $row['Job'] . "</td>";
//   echo "</tr>";
// }
// echo "</table>";
// mysqli_close($con);
?>
</body>
</html>