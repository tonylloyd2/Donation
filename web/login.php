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
    <link rel="stylesheet" href="./css/style.css" />

</head>
<body>
<div class="fullcontainer banner" id="homesection">
    <header style="position: top ;">
                <div class="container">
                    <div class="logo" >
                        <img src="images/logo.png" alt="mchango logo">

                    </div>
                    <nav>
                        <ul>
                            <li>
                                <a href="#homesection">Home</a>
                            </li>
                            <li>
                                <a href="#aboutsection">About us</a>
                            </li>
                            <li>
                                <a href="#programsSection">programs</a>
                            </li>
                            <li>
                                <a href="#educationsection">Education</a>
                            </li>
                            <li>
                                <a href="#educationsection">Stories </a>
                            </li>
                            <li>
                                <a href="#gallerysection">Gallery</a>
                            </li>
                            <li>
                                <a href="#joinsection">Join us</a>
                            </li>
                            <li>
                                <a href="register.php">Sign up</a>
                            </li>
                            <li>
                                <a href="login.php">Sign in</a>
                            </li>
                        </ul>

                    </nav>
                </div>
            </header>
            
    <form action="login_validate.php" method="post" style="padding-left:30% ;">     
    <div class="form" style="justify-content: center;">
        <h1 class="heading" style="color: green; padding-left :100px;">LOGIN</h1>
        <input type="email" placeholder="email" autocomplete="off" class="email" required name="email">
        <input type="password" placeholder="password" autocomplete="off" class="password" required name="password"> 
        <button class="submit-btn" name="login">Log in</button>
        <a href="register.php" class="link" style="width: 100%;">Dont Have an Account? Register one Here</a> 
    <!-- </div> -->
    </div>
        <!-- <p class="welcome-back" style="color: blueviolet;"><b> Welcome please login</b></p>
    
    
    <div class="alert-box">
        <p class="alert">msg</p>
    </div> -->


</form>
    <script src="js/form.js"></script>
    
</body>
</html>