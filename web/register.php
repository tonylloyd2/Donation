<?php
session_start();
include "./connect.php";
require "./functions.php";
if(isset($_POST['signup'])){
    // if($_SERVER['REQUEST_METHOD']=='POST'){  
   register($connectdb);
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div class="alert-box">
        <p class="alert">hello</p>
    </div>
    <form autocomplete="off" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form" >
            <h1 class="heading" style="color:aquamarine ;">SIGN UP</h1>
            <input type="text" placeholder="name" autocomplete="off" class="name" required name="name">
            <input type="email" placeholder="email" autocomplete="off" class="email" required name="email">
            <input type="password" placeholder="password" autocomplete="off" class="password" required name="password">
            <input type="file" name="image" id="image" placeholder="Profile Picture" accept="image/*" style="width:200px;"  required/>
            <button class="submit-btn" name="signup">register</button>
            <a href="login.php" class="link">already have an account? log in here</a>
        </div>
    </form>
    
    <script src="js/form.js"></script>
    
</body>
</html>