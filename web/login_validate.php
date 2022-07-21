<?php
session_start();
include "./connect.php";
require "./functions.php";

if (isset($_POST['login'])){
$user_id = random_id(7);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
if(!empty($email) && !empty($password) ){
    $query  = "select * from  users where email = '$email' limit 1";
    $result =  mysqli_query($connectdb,$query);
    // if ($result) {
        if($result && mysqli_num_rows($result) > 0 ){
            $user_data = mysqli_fetch_assoc($result);
            // password corfirmation
            if( $user_data['password'] === $password){
                $_SESSION['user_id'] = $user_id; 
                $query = "update users set user_id='{$user_id}' where email = '{$email}' ";
                if (mysqli_query($connectdb,$query)) {
                    $data = [
                      'success' => 'Password created succesfully'
                    ];  
                }           
                $response = json_encode($data);
                echo($response);
                header("location:./home.php");
                die; 
            } 
            else {
              echo "<script>
               alert('wrong password');
               location.replace('./login.php');
              </script>";
            }    
        }   
             
    // }
    else {
      echo "<script> alert('Recheck your identification number and try again');location.replace('./login.php'); </script>";
    }
  }
  else {
    echo "<script> alert('fields cannot be empty');location.replace('./login.php');</script>";
  }
    
}
// if (isset($_SESSION['name']) ){
//     echo $_SESSION['name'];
// }
?>