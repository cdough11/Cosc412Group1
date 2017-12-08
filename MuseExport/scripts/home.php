<?php 
session_start();

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <tite> Registeration Page</tite>
    <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
    
        <div class ="header">
        <h1> Home Page </h1>
        </div>
        
        <h1> Hoooooome</h1>
    
    <div><h4>Welcome <?php echo $_SESSION['firstName']; ?></h4></div>
    </body>
</html>