<?php
//hass all the functional logistics .....just a single page site (:
include "./connect.php";


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
       $sql = "INSERT INTO users(name , email , password , user_id)  VALUES ('$username', '$email', '$password' , '$user_id')";
       $result = mysqli_query($connectdb,$sql);
      if($result){
          echo "<script> 
          alert('registered successfully !!!');
          </script>
          ";
      // backup users data in txt file 
          $myfile = fopen("./backup/users_registry.txt", "a") or die("Unable to open file!");
          $sql1 = "select * from users where name='{$username}' limit 1";
          $result =  mysqli_query($connectdb,$sql1);
          $user_data = mysqli_fetch_assoc($result);
          $write_data = "";
          $append = true;
          while ($append) {
          $write_data .= $user_data['name']." ";
          $write_data .= $user_data['email']." ";
          $write_data .= $user_data['password']." ";
          $append = false;
          }
          fwrite($myfile, $write_data."\n");
          // close($myfile);
          // $_SESSION['name'] = $user_data['name'];
          header('Location:login.php');
        }
        else{
          echo "data is not inserted";
          header('Location:signup.php');
        }
}
}
function login($connectdb){

}
?>