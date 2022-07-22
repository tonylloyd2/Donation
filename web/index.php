<?php
session_start();

include "./functions.php";

install();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Mchango Hub</title>
        <link rel="stylesheet" href="./css/style.css" />
    </head>
    <body>
        <!-- Content -->
        <div class="fullcontainer banner" id="homesection">
            <header>
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
                                <a href="./stories.php">Stories </a>
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
            <!--Header ends here-->
            <div class="container">
                <h1>Lets join Hands &<span>Save lives</span></h1>
                <p>
                    “You have not lived today until you have done something for someone who can never repay you.”
                    John Bunyan
                </p>
                <form action="./donate/donate.php" method="post">
                <button>Start with a little</button>
                </form>
            </div>
            

        </div>
        <!--Home section ends here-->
        <section class="fullcontainer" id="aboutsection">
            <div class="container">
                <h2 class="sectionTitle">About Us</h2>
                <p>Thank You For Being a good person we as Mchango Hub believe that ,There is nothing more beautiful than someone who goes out of their way to make life beautiful for others</p>
                <div class="cards">
                    <div class="donationBox">
                        <div class="title">Give Donation</div>
                        <p>
                            “Give, but give until it hurts.”
                            Mother Teresa 
                        </p>
                        <form action="./donate/donate.php" method="post">
                        <button>
                            Donate Now
                        </button>
                        </form>
                    </div>
                    <!--Donation Box ends here-->
                    <div class="volunteerBox">
                        <div class="title">Become a volunteer</div>
                        <p>
                            Strong people don't put others down... They lift them up
                        </p>
                        <form action="./donate/donate.php" method="post">
                        <button>
                            Become Now
                        </button>
                        </form>
                    </div>
                    <!--volunteer Box ends here-->
                    <div class="scholarshipBox">
                        <div class="title">Give Scholarship</div>
                        <p>
                            You have to lift a person up before you can really put them in their place
                        </p>
                        <form action="./donate/donate.php" method="post">
                        <button>
                            Give immediately
                        </button>
                        </form>

                    </div>
                    <!--scholarship Box ends here-->
                    

                </div>

            </div>
        </section>
         <!--about section ends here-->
         <section class="programs" id="programsSection">
            <div class="container">
                <h2 class="sectionTitle">Programs</h2>
                <form action="./donate/donate.php" method="post">
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
         <!--Program section ends here-->
         <!--Education Section Starts-->
         <section class="education" id="educationsection">
            <video autoplay muted loop class="videoplayer">
                <Source src="video/childrens.mp4" type="video/mp4"/>
                Your Browser Does Not support HTML 5 video
            </video>
            <div class="container">
                <div class="sectionTitle">Education</div>
                <div class="educationcontainer">
                    <h3>
                        Education is essential For <br />
                       <strong>BETTER FUTURE</strong> 
                    </h3>
                    <p>
                        Education is a basic human right. It is a process of inviting truth and possibility, of encouraging and giving time to discovery. 
                    </p>
                    <button>Explore Now</button>
                </div>
            </div>

         </section>
         <!--Education Section Ends-->
         <!--Gallery section starts here-->
         <section class="gallery" id="gallerysection">
            <div class="container">
                <div class="sectionTitle">Gallery</div>
                <div class="gallerycontainer">
                    <div class="item">
                        <span class="title">Image Title</span>
                        <img src="images/gallery/1.jpg" alt=""/>
                    </div>
                    <!--Item-->
                    <div class="item">
                        <span class="title">Image Title</span>
                        <img src="images/gallery/2.jpg" alt=""/>
                    </div>
                    <!--Item-->
                    <div class="item">
                        <span class="title">Image Title</span>
                        <img src="images/gallery/3.jpg" alt=""/>
                    </div>
                    <!--Item-->
                    <div class="item">
                        <span class="title">Image Title</span>
                        <img src="images/gallery/4.jpg" alt=""/>
                    </div>
                    <!--Item-->
                    <div class="item">
                        <span class="title">Image Title</span>
                        <img src="images/gallery/5.jpg" alt=""/>
                    </div>
                    <!--Item-->
                    <div class="item">
                        <span class="title">Image Title</span>
                        <img src="images/gallery/6.jpg" alt=""/>
                    </div>
                    <!--Item-->
                    <div class="item">
                        <span class="title">Image Title</span>
                        <img src="images/gallery/7.jpg" alt=""/>
                    </div>
                    <!--Item-->
                    <div class="item">
                        <span class="title">Image Title</span>
                        <img src="images/gallery/8.jpg" alt=""/>
                    </div>
                    <!--Item-->
                </div>
            </div>
         </section>
         <!--Gallery section ends here-->
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
                <button class="joinNow">JOIN US</button>
                <form action="./donate/donate.php" method="post">
                <button class="donateBtn">CHANGA/DONATE</button>
                </form>
            </div>

         </section>      
         <!--Join section ends Here-->
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
         <script>
                function donate(){
                    location.replace('./donate/donate.php');
                }
         </script>
    </body>
</html>


