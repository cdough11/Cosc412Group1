<html><head>
<style>
body {background-color: #ECCEF5;}
</style>
   <meta charset="utf-8">
   <title>Technology in the Kitchen</title>
</head>
<body>
<table border=1>
<tr><th>ID</th><th>Make</th><th>Model</th><th>Size</th>
<th>Price</th></tr>
<?php
include 'db.inc.php';
// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
  $password)))
  showerror();
// Use the refrigerator database
if (!mysql_select_db($databaseName, $connection))
  showerror();
 
// Create SQL statement
$query = "SELECT * FROM kitchen";
// Execute SQL statement
if (!($result = @ mysql_query ($query, $connection)))
  showerror();
// Display results
while ($row = @ mysql_fetch_array($result))
  echo "<tr><td>{$row["id"]}</td>
<td>{$row["make"]}</td>
<td>{$row["model"]}</td>
<td>{$row["size"]}</td>
<td>{$row["price"]}</td></tr>";
?>
</table></body>
<a href="http://triton.towson.edu/~bsimmo7/COSC-484/Final/FinalProject.html"><h3> Home </h3></a>
</html>