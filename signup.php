<!DOCTYPE html>

<html>

<head>
    <title>Signup</title>
</head>

<body>
    <form method="post" action="signup-sign.php">
                            
        <input type="text"  placeholder="Username" name="username">
        <input type="text"  placeholder="E-mail" name="mail">
        <input type="password" placeholder="Password" name="pwd">
                          
        <button type="signup-submit">Submit</button>
        <?php 
            if (isset($_GET['error'])) {
                echo "Please Enter All Field";
            }
        ?> 
</form>          
    
</body>

</html>