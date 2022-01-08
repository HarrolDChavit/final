<!DOCTYPE html>

<html>
<head>
    <title>login</title>
</head>
<body>
    <form method="post" action="index_login.php">
                            
        <input type="text"  placeholder="Username" name="uid">
                        
                            
        <input type="password" placeholder="Password" name="pwd">
                          
        <button type="submit">Login</button> <br>
        If you don't have account: <a href="signup.php">SignUp Here</a>

            <?php 
            if (isset($_GET['error'])) {
                echo "User account not found";
                }
            else if (isset($_GET['unauthorized'])) {
                echo "Invalid User or Password";
                }
            ?> 
              
    </form>
</body>
</html>