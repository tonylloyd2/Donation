<?php 
session_start();
if (isset($_SESSION['user_id']) ){
  // echo $_SESSION['user_id'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Make a donation</title>
  <!-- MDB icon -->
  <link rel="icon" href="../images/download.jpg" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/bootstrap-payment-forms.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <style>
    /* body, section{
      background-color: blueviolet;
    } */
     .gradient-custom { background: radial-gradient(50% 123.47% at 50% 50%, #00FF94 0%, #720059
    100%), linear-gradient(121.28deg, #669600 0%, #FF0000 100%), linear-gradient(360deg,
    #0029FF 0%, #8FFF00 100%), radial-gradient(100% 164.72% at 100% 100%, #6100FF 0%, #00FF57
    100%), radial-gradient(100% 148.07% at 0% 0%, #FFF500 0%, #51D500 100%);
    background-blend-mode: screen, color-dodge, overlay, difference, normal; }
  </style>
</head>

<body>
<!-- <div class="fullcontainer banner" id="homesection"> -->
            <header>
                <div class="container">
                    <div class="logo" >
                        <img src="../images/logo.png" alt="mchango logo">
                        <!-- <link rel="icon" href="../images/download.jpg" type="image/x-icon" /> -->
                    </div>
                    <nav>
                        <ul>
                            <li>
                                <a href="../home.php">Home</a>
                            </li>
                            <li>
                                <a href="../home.php">About us</a>
                            </li>
                            <li>
                                <a href="../home.php">programs</a>
                            </li>
                            <li>
                                <a href="../home.php">Education</a>
                            </li>
                            <li>
                                <a href="../home.php">Gallery</a>
                            </li>
                            <li>
                                <a href="../home.php">Join us</a>
                            </li>
                            <!-- <li>
                                <a href="../register.php">Sign up</a>
                            </li>
                            <li>
                                <a href="../login.php">Sign in</a>
                            </li> -->
                        </ul>

                    </nav>
                </div>
            </header>
            <!--Header ends here-->
           
        <!-- </div> -->
  <section class="gradient-custom">
    <div class="container my-5 py-5">
      <div class="row d-flex justify-content-center py-5" >
        <div class="col-md-5 col-lg-10 col-xl-4" >
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-4 c" style="">
               <form action="MpesaPayment.php" method="post">
                <img
                    src="./img/download.png"
                    alt="visa"
                    width="100px"
                  />
                  <img src="../images/download.jpg" alt="mchango logo" height="100px">
                <!-- <div class="d-flex justify-content-between align-items-center mb-3" style="width: 100%;"> -->
                  <div class="form-outline">
                    <input class="form-control form-control-lg" type="number" name="phone_number" required placeholder="Enter : 254XXXXXXXXX" style="margin-top: 60px;">
                    <label class="form-label" for="typeText">Phone Number</label>
                  </div> 
                  <br>
                <!-- </div> -->
                <!-- <div class="d-flex justify-content-between align-items-center mb-4"> -->
                  <div class="form-outline">
                    <input class="form-control form-control-lg" type="number" type="number" required name="amount" placeholder="enter amount">
                    <label class="form-label" for="typeName">Amount to Donate</label>
                  </div>
                  <br>
                <!-- </div> -->
                <!-- <div class="d-flex justify-content-between align-items-center pb-2"> -->
                  <button type="submit" class="btn btn-info btn-lg btn-rounded" style="background-color: green;">
                  * Donate now *
                  </button>
                <!-- </div>  -->
             </form>
            </div>
          </div>
        </div>
      </div>
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
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript"></script>
</body>

</html>