<?php
$servername = "edufitdb.ccfkgwtrrucm.us-east-1.rds.amazonaws.com";
$username = "cosc412group1";
$password = "Towson2017";
$dbname = "EduFit_Data_Source";
$teamName = $_POST["teamName"];
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$query = "SELECT  FirstName, LastName, Total, TeamName FROM Activites INNER JOIN Student ON StudentID = SID WHERE TeamName = '" . $teamName "' GROUP BY LastName, FirstName ORDER BY Total DESC LIMIT 7;"
$result = mysql_query($query);
$pos = 1;
echo "<table border='1'>
<tr>
<th>Position</th>
<th>First Name</th>
<th>Last Name</th>
<th>Points</th>
</tr>";


while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $pos . "</td>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "<td>" . $row['Total'] . "</td>";
echo "</tr>";
$pos++;
}
echo "</table>";

mysqli_close($conn);
?>