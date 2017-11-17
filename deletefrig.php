<html>
<head>
<style>
body {background-color: #ECCEF5;}
</style>
<meta charset="utf-8">
  <title>Delete</title>
</head>
<body>
<table border=1>
<tr><th>ID</th><th>Make</th><th>Model</th><th>Size</th>
<th>Price</th></tr>
    <?php
    include 'db.inc.php';
	
	$id = $_POST["id2"];

    if (!($connection = @ mysql_connect($hostName, $username,
        $password)))
        showerror();

    if (!mysql_select_db($databaseName, $connection))
        showerror();

    $query ="DELETE FROM kitchen WHERE price='$id'";
    if (!($result = @ mysql_query ($query, $connection)))
        showerror();
    else
        echo "Records have been deleted";
    ?>
<form action="selectall2.php" method="post">
  <h3>View your updates!</h3>
  <input type="submit" value="View Updates!" />
</form>
</body>
<a href="http://triton.towson.edu/~bsimmo7/COSC-484/Final/FinalProject.html"><h3> Home </h3></a>
</html>