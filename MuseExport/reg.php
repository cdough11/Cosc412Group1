


<!DOCTYPE html>

<html lang="en">
<head>
    <tite> Registration Page</tite>
    <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
    
        <div class ="header">
        <h1> Please fill all the form out </h1>
        </div>
    <form action="scripts/regi.php" method="post">
        
        <table>
            
        <tr>
        <td> First Name</td>
        <td><input type="text" name="firstName" class="input"></td>  
        </tr>
        
            <tr>
        <td> Last Name</td>
        <td><input type="text" name="lastName" class="input"></td>  
        </tr>
            
        <tr>
        <td> Email</td>
        <td><input type="email" name="email" class="input"></td>  
        </tr>
        
        <tr>
        <td> Password</td>
        <td><input type="password" name="password" class="input"></td>  
        </tr>
      
    
        <tr>
        <td> Conf. Password</td>
        <td><input type="password" name="password2" class="input"></td>  
        </tr>
    
        <tr>
        <td> </td>
        <td><input type="submit" name="submit" value="Register"></td>  
        </tr>
          </table>
    </form>
    
    
    
    </body>
</html>