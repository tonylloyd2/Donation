<?php
session_start();
include "../../connect.php";
// echo "hello world";
if (isset($_SESSION['user_id']) ){
    $id = $_SESSION['user_id'];
    $query = mysqli_query($connectdb,"SELECT * FROM users  where user_id = '$id'  limit 1");
    $data = mysqli_fetch_assoc($query);
}
else{
    echo "
    <script>
    alert('You are not loged in :');
    location.replace('../../index.php');
    </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Mchango Hub</title>
        <!-- <link rel="stylesheet" href="./css/style.css" /> -->
        <link rel="stylesheet" href="../../css/style.css">
    </head>
    <body>
        <!-- Content -->
        <div class="fullcontainer banner" id="homesection">
            <header>
                <div class="container">
                    <div class="logo" >
                    <b style="color:green ;"><?php echo "Welcome : ".$data['name']; ?> </b>
                    
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
                                <a href="#gallerysection">Gallery</a>
                            </li>
                            <li>
                                <a href="#joinsection">Donate</a>
                            </li>
                            <li>
                                <form action="../../logout.php" method="post">
                                 <button type="submit" style="border-radius:30px;">Sign out</button>
                                </form>
                            </li>
                        </ul>

                    </nav>
                </div>
            </header>
            
            <section class="programs" id="programsSection">
            <div class="container">
                <h2 class="sectionTitle">Programs</h2>
                <form action="../../donate/donate.php" method="post">
                    <div class="boxcontainer">
                        <div class="box">
                            <div class="cardImage"></div>
                            <div class="programTitle">Education to every child</div>
                            <div class="donationCount">
                                Donation Goal : <span>Ksh650,000</span>
                            </div>
                            <button>Donate Now</button>
                        </div>
                        <!--Box ends Here-->
                        <div class="box">
                            <div class="cardImage"></div>
                            <div class="programTitle">Make life easier for them</div>
                            <div class="donationCount">
                                Donation Goal : <span>Ksh500,000</span>
                            </div>
                            <button>Donate Now</button>
                        </div>
                        <!--Box ends Here-->
                        <div class="box">
                            <div class="cardImage"></div>
                            <div class="programTitle">Dedicating to help affected families

                            </div>
                            <div class="donationCount">
                                Donation Goal : <span>Ksh40,000</span>
                            </div>
                            <button>Donate Now</button>
                        </div>
                        <!--Box ends Here-->
                        <div class="box">
                            <div class="cardImage"></div>
                            <div class="programTitle">Support businesses for people</div>
                            <div class="donationCount">
                                Donation Goal : <span>Ksh100,000</span>
                            </div>
                            <button>Donate Now</button>
                        </div>
                        <!--Box ends Here-->
                    </div>
                </form>
                <!--Box container Ends Here-->
            </div>

         </section>
         <!--Join section ends Here-->
         <section class="join" id="joinsection">
            <div class="container">
                <div class="joinTitle">DONATE TODAY & <span>SAVE LIVES</span>
                </div>
                <p>
                    Those who are less fortunate
                    Often don't  want to ask for help.

                    Hard times hit all of us at some point
                    Enjoy your good fortune
                    Let your fortune help others
                    People helping people makes this world a better place!
                </p>
            </div>
         </section> 
         <footer>
            <div class="container">
                <div class="newsLetterContainer">
                    <img src="images/logo.png">
                    <p>
                        "Helping others, without expecting anything in return is what true self-worth is all about."
                    </p>
                    <input type="text" placeholder="Enter your email id"/>

                </div>
                <!--Newsletter container-->
                <div class="linkContainer">
                    <div class="title">useful links</div>
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
                            <a href="#gallerysection">Gallery</a>
                        </li>
                        <li>
                            <a href="#joinsection">Join us</a>
                        </li>
                    </ul>

                </div>
                <!--link container-->
                <div class="connectContainer">
                    <div class="title">connect with us</div>
                    <p>Africa, Nairobi ,kenya<br/>
                        2100, kimathi house
                    </p>
                    <p>mchangohub.co.ke</p>
                    <p>(+254) 792893310</p>


                </div>
                <!--Connect container-->
            </div>
         </footer>
    </body>
</html>
