 <?php

/*

* db.inc.php

* These are the DBMS credentials and the database name

*/

$hostName = "";

$databaseName = "";  

$username = "";            

$password = "";               

// Show an error and stop the script

function showerror()

{

if (mysql_error())

die("Error " . mysql_errno() . " : " . mysql_error());

else

die ("Could not connect to the DBMS");

}

?>