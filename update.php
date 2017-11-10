<html>
<head>
<style>
body {background-color: #ECCEF5;}
</style>
  <title>Update</title>
</head>
<body>
<article>
<table border=1>
<tr><th>ID</th><th>Make</th><th>Model</th><th>Size</th>
<th>Price</th></tr>
<div class="">
    <?php
    include 'db.inc.php';

    $make = $_POST["make"];
    $price = $_POST["price"];
    $id = $_POST["id"];


    if (!($connection = @ mysql_connect($hostName, $username,
        $password)))
        showerror();

    if (!mysql_select_db($databaseName, $connection))
        showerror();

    $query = "UPDATE kitchen SET price = '$price' WHERE id = '$id'";

    if (!($result = @ mysql_query ($query, $connection)))
        showerror();
    else
        echo "<h1>Thank You for your update!</h1>";

    ?>
</div>
</article>
</body>
<form action="selectall2.php" method="post">
  <h3>View your updates!</h3>
  <input type="submit" value="Click Here" />
</form>
<a href="http://triton.towson.edu/~bsimmo7/COSC-484/Final/FinalProject.html"><h3> Home </h3></a>
</html>
