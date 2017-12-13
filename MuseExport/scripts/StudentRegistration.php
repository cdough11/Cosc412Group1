<?php 
   
session_start();



                include 'db.inc.php';
            // Connect to MySQL DBMS
            $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
    

                      if(isset($_POST['submit'])){
                          
                        $firstname = $_POST['firstName'];
                        $lastname = $_POST['lastName'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
						$studentID = $_POST['studentID'];
						
						$parentaccesscode = $lastname . $studentID;
						}
						
                          
                        $query = "INSERT INTO Student (FirstName, LastName, EmailAddress, Password, StudentID, ParentAccessCode) VALUES ('$firstname','$lastname','$email','$password','$studentID','$parentaccesscode')" ;
                         // Execute SQL statement
                         if($stmt = mysqli_prepare($conn, $query)){
							//mysqli_stmt_bind_param($stmt, "ss", $emailAddress, $sitePassword);
							if(!mysqli_execute($stmt)){
								printf("Query failed: %s\n", mysqli_error);
							}
            
            
                            $_SESSION['firstName'] = $firstname;
                    
                            $url = "https://edufit.000webhostapp.com/index.html";
							header("Location: " . $url);
						 }
mysqli_close($conn);

    
?>