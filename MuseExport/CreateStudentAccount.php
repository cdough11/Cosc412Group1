<?php
$servername = "edufitdb.ccfkgwtrrucm.us-east-1.rds.amazonaws.com";
$username = "cosc412group1";
$password = "Towson2017";
$dbname = "EduFit_Data_Source";

$emailAddress = $_POST["emailAddress"];
$sitePassword = $_POST["password"];
$accessCode = $_POST["accessCode"];
$studentID = $_POST["studentID"];

$conn = new mysql($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO Student (EmailAddress, Password, AccessCode, StudentID) VALUES(?, ?, ?, ?);");
$stmt->bind_param($emailAddress, $sitePassword, $accessCode, $studentID);

$result = $conn->query($stmt);

if($result->successful){
	echo "Login successful";
}
else{
	echo "Login failed.";
}

$conn->close();

?>