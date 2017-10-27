<?php
$servername = "edufitdb.ccfkgwtrrucm.us-east-1.rds.amazonaws.com";
$username = "cosc412group1";
$password = "Towson2017";
$dbname = "EduFit_Data_Source";

$emailAddress = $_POST["emailAddress"];
$sitePassword = $_POST["password"];

$conn = new mysql($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("SELECT COUNT(EmailAddress) FROM Student WHERE EmailAddress = ? AND Password = ?");
$stmt->bind_param($emailAddress, $sitePassword);

$result = $conn->query($stmt);

if($result->num_rows > 0){
	echo "Login successful";
}
else{
	echo "Login failed.";
}

$conn->close();

?>