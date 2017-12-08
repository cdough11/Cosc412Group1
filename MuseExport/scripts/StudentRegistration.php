<?php 
   
session_start();



                include 'db.inc.php';
            // Connect to MySQL DBMS
            if (!($connection = @ mysql_connect($hostName, $username,
              $password)))
              showerror();
            if (!mysql_select_db($databaseName, $connection))
              showerror();
    

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
                         if (!($result = @ mysql_query ($query, $connection)))
                         showerror();
                          $_SESSION['message'] = " Welcome to the Home page";
            
            
                            $_SESSION['firstName'] = $firstname;
                            }
                    
                            header("location: index.html");
                                exit;


    
?>