<?php
//hass all the functional logistics .....just a single page site (:
function install(){
  if (file_exists('./connect.php')) {
    include ("./connect.php");
    // echo "
    // <script>
    // location.replace('./index.php');
    // </script>
    // ";
  }
  else{
    $myfile = fopen("./connect.php", "a") or die("Unable to open file!");
    $write_data = "";
    $write_data .= "\n";
    fwrite($myfile, $write_data);      
    echo "<script>
           alert('lets walk you through the installation process : ') ; 
           location.replace('./install/install.php');
          </script>"; 
  }
}
function write_into_(){

    $host = $_POST['host'];
    $username = $_POST['username_db'];
    $password = $_POST['password_db'];
    $db_name = $_POST['name_db'];

    $myfile = fopen("../connect.php", "w") or die("Unable to open file!");
    $write_data = '
      <?php
          $host = "'.$host.'";
          $username = "'.$username.'";
          $password = "'.$password.'";
          $db_name = "'.$db_name.'";

          $connectdb = mysqli_connect($host,$username,$password,$db_name);

          if (!$connectdb)
          {
            echo "Connection failed<br>";
            echo "Error number: " . mysqli_connect_errno() . "<br>";
            echo "Error message: " . mysqli_connect_error() . "<br>";
            die();
          }
      ?>  
      ';
// fwrite($myfile, $write_data);
if (fwrite($myfile ,$write_data) == true) {
  // header("location:../index.php");
  echo "
  <script>
  location.replace('../index.php');
  </script>
  ";
}
else if(fwrite($myfile ,$write_data) == false){
  $data = [
    'error' => 'the installation failed kindly retry'
  ];    
  $response = json_encode($data);
  echo($response);
}

}
  if (file_exists('./connect.php')) {
    include "./connect.php";
  }

function random_id($length){   
    $alpha = array_merge(range('A','Z'));
    $rand_string = "";
    for ($i=0; $i <= $length ; $i++) { 
        $random = rand(1,2);
        if($random==1){
            $rand_string.=rand(0,9);
        }
        elseif($random==2){
            $rand_string.=$alpha[array_rand($alpha,1)];
        }
    }
    return $rand_string;
  }

$user_id = random_id(15);
$proceed = true;



function register($connectdb){
    $username = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
  //   $userprofile = $_POST['userprofile'];
  
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
      echo "Only letters and white space allowed";
    }
    $proceed = true;
    
    $result_email = mysqli_query($connectdb,"SELECT * FROM users WHERE email='$email' ");
    
    if(mysqli_num_rows($result_email) > 0){
        $proceed = false;
        $data = [
          'error' => 'This Email is already registered'
        ];    
        $response = json_encode($data);
        echo($response);
        echo "<script> 
          alert('email already exist');
          location.replace('./register.php')
          </script>
          ";
    }
if ($proceed) { 
        $user_id = random_id(5);
        
        $media_root = "./media/profiles/";
        $upload_to = $media_root . basename($_FILES["image"]["name"]);
        $image_url = "./media/profiles/".basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($upload_to,PATHINFO_EXTENSION));
        
        $check = getimagesize($_FILES["image"]["tmp_name"]);
          if($check !== false) {
            $uploadOk = 1;
          } 
          else {
            $data =["error" => "File is not an image."];
            $response = json_encode($data);
            echo($response);
            $uploadOk = 0;
          }
        
          if ($_FILES["image"]["size"] > 500000) {
          $data = ["error" => "Sorry, your file is too large."];
          $response = json_encode($data);
          echo($response);
          $uploadOk = 0;
         }
        
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
          $data = ["error" => "Sorry, only JPG, JPEG, PNG & GIF files are allowed."];
          $response = json_encode($data);
          echo($response);
          $uploadOk = 0;
         }
        
        if ($uploadOk == 0) {
          $data = ["error" => "Sorry, your file was not uploaded."];
          $response = json_encode($data);
          echo($response);
         } 
        
         else {
           if (move_uploaded_file($_FILES["image"]["tmp_name"], $upload_to)) {
              $story = "";
              $query= "INSERT INTO users(name , email , password , user_id , profile , story)  VALUES ('$username', '$email', '$password' , '$user_id' , '$image_url' , '$story')";
            if(mysqli_query($connectdb,$query)){
                  $data = [
                      'success' => 'Voter registered succesfully'
                    ]; 
                    $response = json_encode($data);
                    echo "<script>
                          alert('registration was successfull');
                          </script>";
                    
                    $myfile = fopen("./install/users_registry.txt", "a") or die("Unable to open file!");
                    $sql1 = "select * from users where name='{$username}' limit 1";
                    $result =  mysqli_query($connectdb,$sql1);
                    $user_data = mysqli_fetch_assoc($result);
                    $write_data = "";
                    $append = true;
                    while ($append) {
                    $write_data .= $user_data['name']." ";
                    $write_data .= $user_data['email']." ";
                    $write_data .= $user_data['password']." ";
                    $write_data .= $user_data['profile']." ";
                    $append = false;
                    }
                    fwrite($myfile, $write_data."\n");
                    
                    header('Location:login.php');
                    
            }
            else if(!mysqli_query($connectdb,$query)){
              $data = [
                  'error' => 'There was an error in your registration please try again'
              ];
              $response = json_encode($data);
              echo($response);
            }                                     
          } 
          else {
            $data = ["error" => "Sorry, there was an error uploading your file."];
            $response = json_encode($data);
            echo($response);
          }
        }

      // backup users data in txt file 
        }
        else{
          echo "data is not inserted";
          header('Location:signup.php');
        }
}

function login($connectdb){

}
?>