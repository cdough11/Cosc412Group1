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
                        $CoachID = $_POST['CoachID'];
                        $FirstName = $_POST['FirstName'];
                        $LastName = $_POST['LastName'];
                        $EmailAddress = $_POST['EmailAddress'];
                        $TeamName = $_POST['TeamName'];
                        $Password = $_POST['Password'];
                        $TrainingFacilityID = $_POST['TrainingFacilityID'];
                          
                          if (isset($_POST['Coach'])){
                        $query = "INSERT INTO Coach (CoachID, FirstName, LastName, EmailAddress, TeamName,Password) VALUES ('$CoachID','$FirstName','$LastName','$EmailAddress','$TeamName','$Password')" ;
                         // Execute SQL statement
                         if (!($result = @ mysql_query ($query, $connection)))
                         showerror();
                          } 
                        
                              
                              if (isset($_POST['Triner'])){
                            $query = "INSERT INTO Triner ( FirstName, LastName, EmailAddress, TrainingFacilityID,Password) VALUES               ('$FirstName','$LastName','$EmailAddress','$TrainingFacilityID','$Password')" ;
                                  if (!($result = @ mysql_query ($query, $connection)))
                                    showerror();
                          }
                          
                          $_SEESION['message'] = " Welcom to the Home page";
            
            
                            $_SEESION['FirstName'] = $FirstName;
                            }
                    
                            header("location: home.php");
                                exit;


    
?>