<?php
$servername = "edufitdb.ccfkgwtrrucm.us-east-1.rds.amazonaws.com";
$username = "cosc412group1";
$password = "Towson2017";
$dbname = "EduFit_Data_Source";

$emailAddress = $_POST["emailAddress"];
$sitePassword = $_POST["password"];

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT EmailAddress FROM Admin WHERE EmailAddress = '" . $emailAddress . "' AND Password = '" . $sitePassword . "';";

// prepare and bind
if($stmt = mysqli_prepare($conn, $query)){
	//mysqli_stmt_bind_param($stmt, "ss", $emailAddress, $sitePassword);
	if(!mysqli_execute($stmt)){
		printf("Query failed: %s\n", mysqli_error);
	}
	mysqli_stmt_bind_result($stmt, $result);
	$foundMatch = mysqli_stmt_fetch($stmt);
	if($foundMatch == null)
		$foundMatch = "NULL";
	if($foundMatch){
		$url = "https://edufit.000webhostapp.com/admin-page.html";
		header("Location: " . $url);
		die();
	}
	else{
		echo "Login failed";
	}
	
}



mysqli_close($conn);
?>