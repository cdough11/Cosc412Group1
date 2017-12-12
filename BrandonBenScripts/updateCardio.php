<?php
$servername = "edufitdb.ccfkgwtrrucm.us-east-1.rds.amazonaws.com";
$username = "cosc412group1";
$password = "Towson2017";
$dbname = "EduFit_Data_Source";
$id = $_POST["id"];
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
// Update Cardio 
$q1 = "UPDATE Activites
SET Cardio = (Cardio + 200)
WHERE SID = '$id'";
//Update Total
$q2 = "UPDATE Activites
SET Total = (Cardio + Endurance + Flexibility)
WHERE SID = '$id'";


// prepare and bind
mysql_query($q1);
mysql_query($q1);

mysqli_close($conn);
?>
