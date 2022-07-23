<?php
// echo $_POST['id'];
session_start();
include "./connect.php";
if(isset($_POST['post_my_story'])){
    $name = $_POST['id'];
    $query_individual = mysqli_query($connectdb,"SELECT story , name , id , profile FROM users where name='$name' limit 1;");
    $story = mysqli_fetch_assoc($query_individual);
}
if (isset($_SESSION['user_id']) ){
   
    $id = $_SESSION['user_id'];
    $query_individual = mysqli_query($connectdb,"SELECT * FROM users  where user_id = '$id'  limit 1");
    $story = mysqli_fetch_assoc($query_individual);
       
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo  $story['name']."'s story" ?></title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="./css/style.css" />
    <style>
        section{
            max-width: 100%;
            max-height: 100%;
            margin-top: 100px;
            align-content: center;
            align-items: center;
            padding-left: 30%;
        }
        .banner{
            min-height: 100 vh;
            width: 100%;
            background-image: url('<?php echo  $story['profile']; ?>');
            background-size: cover; 
            background-attachment: fixed;
        }
    </style>
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
                                <a href="./home.php#homesection">Home</a>
                            </li>
                            <li>
                                <a href="./home.php#aboutsection">About us</a>
                            </li>
                            <li>
                                <a href="./home.php#programsSection">programs</a>
                            </li>
                            <li>
                                <a href="./home.php#educationsection">Education</a>
                            </li>
                            <li>
                                <a href="./stories.php">Stories </a>
                            </li>
                            <li>
                                <a href="./home.php#gallerysection">Gallery</a>
                            </li>
                            <li>
                                <a href="./home.php#joinsection">Join us</a>
                            </li>
                            <li>
                                <a href="./register.php">Sign up</a>
                            </li>
                            <li>
                                <a href="./login.php">Sign in</a>
                            </li>
                        </ul>

                    </nav>
                </div>
            </header>
            <section>
                <p style="">
                    <?php 
                        if ($story['story'] == "") {
                            echo  "     ".$story['name'] . " has not posted any story yet";
                        }
                        else{
                            echo  $story['story'];
                        }
                        
                    ?>
                    </p>
        </section>
        
    </div>
    <script src="js/form.js"></script>
    
</body>
</html>