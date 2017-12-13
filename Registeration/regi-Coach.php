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
    

                        $FirstName = $_POST['firstName'];
                        $LastName = $_POST['lastName'];
                        $EmailAddress = $_POST['emailAddress'];
                        $TeamName = $_POST['teamName'];
                        $Password = $_POST['password'];
                        $CoachOrTrainer = $_POST['switch_2'];
                          
                          if ($CoachOrTrainer == 'coach'){
                        $query = "INSERT INTO Coach (FirstName, LastName, EmailAddress, TeamName, Password) VALUES ('$FirstName','$LastName','$EmailAddress','$TeamName','$Password')" ;
                         // Execute SQL statement
                         if($stmt = mysqli_prepare($conn, $query)){
							//mysqli_stmt_bind_param($stmt, "ss", $emailAddress, $sitePassword);
							if(!mysqli_execute($stmt)){
								printf("Query failed: %s\n", mysqli_error($conn));
							}
                          }
						  }						  
                        
                              
                              if ($CoachOrTrainer == 'trainer'){
								$query = "INSERT INTO Trainer ( FirstName, LastName, EmailAddress, Password) VALUES               ('$FirstName','$LastName','$EmailAddress','$Password')" ;
								if($stmt = mysqli_prepare($conn, $query)){
								//mysqli_stmt_bind_param($stmt, "ss", $emailAddress, $sitePassword);
									if(!mysqli_execute($stmt)){
										printf("Query failed: %s\n", mysqli_error($conn));
									}
								}
							}
						 mysqli_close($conn);

    
?>