<html><head>
<style>
body {background-color: #ECCEF5;}
</style>
   <meta charset="utf-8">
   <title>Insertion</title>
</head>
<body>
<article>
<table border=1>
<tr><th>ID</th><th>Make</th><th>Model</th><th>Size</th>
<th>Price</th></tr>
<?php
 include 'db.inc.php';
 
 $make = $_POST["make"];
 $model = $_POST["model"];
 $size = $_POST["size"];
 $price = $_POST["price"];
 $id = null;
 // Connect to MySQL DBMS
 if (!($connection = @ mysql_connect($hostName, $username, $password)))
 showerror();
 // Use the kitchen database
 if (!mysql_select_db($databaseName, $connection))
 showerror();
  // Create SQL statement
 $query = "INSERT INTO kitchen (id, make, model, size, price)
 VALUES ('$id', '$make', '$model', '$size', '$price')";

 if (!($result = @ mysql_query ($query, $connection)))
	showerror();
 else
	echo "thank you"
  ?> 
  </article>
 </body> 
 <form action="selectall2.php" method="post">
  <h3>View the new table</h3>
  <input type="submit" value="Click Hear" />
</form>
<a href="http://triton.towson.edu/~bsimmo7/COSC-484/Final/FinalProject.html"><h3> Home </h3></a>
 </html>