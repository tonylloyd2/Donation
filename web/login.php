<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="css/form.css">

</head>
<body>
    
        <p class="welcome-back" style="color: blueviolet;"><b> Welcome please login</b></p>
    
    
    <div class="alert-box">
        <p class="alert">msg</p>
    </div>
<form action="login_validate.php" method="post">     
    <div class="form">
       
        <h1 class="heading" style="color: green;">LOGIN</h1>
        <input type="email" placeholder="email" autocomplete="off" class="email" required name="email">
        <input type="password" placeholder="password" autocomplete="off" class="password" required name="password"> 
        <button class="submit-btn" name="login">Log in</button>
        <a href="register.php" class="link">Dont Have an Account? Register one Here</a> 
    </div>
</form>
    <script src="js/form.js"></script>
    
</body>
</html>