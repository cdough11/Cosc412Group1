<?php
$db_host = "edufitdb.ccfkgwtrrucm.us-east-1.rds.amazonaws.com";  // server to connect to.
$db_name = "edufitdb";  // the name of the database.
$db_user = "cosc412group1";  // mysql username to access the database with.
$db_pass = "Towson2017";  // mysql password to access the database with.
$db_table = "Student";    // the table that this script will set up and use.

$emailAddress = $_POST["emailAddress"];
$sitePassword = $_POST["password"];
$accessCode = $_POST["accessCode"];
$studentID = $_POST["studentID"];
$conn = new mysql($db_host, $db_user, $db_pass, $db_name);
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
