<?php 
   
session_start();



                include 'db.inc.php';
            // Connect to MySQL DBMS
            if (!($connection = @ mysql_connect($hostName, $username,
              $password)))
              showerror();
            // Use the cars database
            if (!mysql_select_db($databaseName, $connection))
              showerror();
    

                      if(isset($_POST['submit'])){
                          
                        $firstname = $_POST['firstName'];
                        $lastname = $_POST['lastName'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $password2 = $_POST['password2'];
                          
                        $query = "INSERT INTO UserTest (Fname, Lname, Email, Password, ConfPassword) VALUES ('$firstname','$lastname','$email','$password','$password2')" ;
                         // Execute SQL statement
                         if (!($result = @ mysql_query ($query, $connection)))
                         showerror();
                          $_SEESION['message'] = " Welcom to the Home page";
            
            
                            $_SEESION['firstName'] = $firstname;
                            }
                    
                            header("location: home.php");
                                exit;


    
?>