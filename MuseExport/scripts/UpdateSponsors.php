<?php
$servername = "edufitdb.ccfkgwtrrucm.us-east-1.rds.amazonaws.com";
$username = "cosc412group1";
$password = "Towson2017";
$dbname = "EduFit_Data_Source";

$schoolID = $_POST["schoolID"];
$sponsor1 = $_POST["sponsor1"];
$sponsor2 = $_POST["sponsor2"];
$sponsor3 = $_POST["sponsor3"];

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "INSERT INTO SPONSORS(schoolID, sponsor1, sponsor2, sponsor3) VALUES(" . $schoolID . ", '" . $sponsor1 . "', '" . $sponsor2 . "', '" . $sponsor3 . "') 
ON DUPLICATE KEY UPDATE sponsor1 = '" . $sponsor1 . "', sponsor2 = '" . $sponsor2 . "', sponsor3 = '" . $sponsor3 . "';";

// prepare and bind
if($stmt = mysqli_prepare($conn, $query)){
	//mysqli_stmt_bind_param($stmt, "ss", $emailAddress, $sitePassword);
	if(!mysqli_execute($stmt)){
		printf("Query failed: %s\n", mysqli_error);
		echo "Update failed";
	}	
}

$url = "https://edufit.000webhostapp.com/admin-page.html";
		header("Location: " . $url);
		die();

mysqli_close($conn);
?>