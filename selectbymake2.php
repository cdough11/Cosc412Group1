 <html><head><title>Refrigerators By Make</title></head> 
<body>
<?php if(!empty($_POST['make'])) {
 echo "<table border=1>
 <tr><th>ID</th><th>Make</th><th>Model</th><th>Size</th>
 <th>Price</th></tr>";
 include 'db.inc.php';
 // Connect to MySQL DBMS
 if (!($connection = @ mysql_connect($hostName, $username,
 $password)))
 showerror();
 // Use the cars database
 if (!mysql_select_db($databaseName, $connection))
 showerror();
 // Create SQL statement
 $make = $_POST['make'];
 $query = "SELECT * FROM kitchen WHERE make='$make'";
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
 echo "</table>";
 } ?> 
 </body> 
 </html>