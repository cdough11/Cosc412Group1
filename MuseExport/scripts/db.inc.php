 <?php

/*

* db.inc.php

* These are the DBMS credentials and the database name

*/

$hostName = "edufitdb.ccfkgwtrrucm.us-east-1.rds.amazonaws.com";

$databaseName = "EduFit_Data_Source";  

$username = "cosc412group1";            

$password = "Towson2017";               

// Show an error and stop the script

function showerror()

{

if (mysql_error())

die("Error " . mysql_errno() . " : " . mysql_error());

else

die ("Could not connect to the DBMS");

}

?>