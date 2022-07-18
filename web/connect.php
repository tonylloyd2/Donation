<?php
// the variables below arent really neccessary
// $name = $_POST['name'];
// $email = $_POST['email'];
// $password = $_POST['password'];
//DATABASE CONNECTION STARTS HERE
// $conn = new mysqli('localhost','lloyd','0220','mchango');
// if($conn->connect_error){
//     die('Connection Failed :'.$conn->connect_error);

// }
// else{
//     $stmt=$conn->prepare("insert into registration(name,email,password)values(?,?,?)");
//     $stmt->bind_param("sss",$name,$email,$password);
//     $stmt->execute();
//     header("Location:login.html");
//     echo ("You Have Registered successfully, please login");
//     exit();
// }
$host = "localhost";
$username = "lloyd";
$password = "0220";
$db_name = "mchango";

$connectdb = mysqli_connect($host,$username,$password,$db_name);

if (!$connectdb)
{
   echo "Connection failed<br>";
   echo "Error number: " . mysqli_connect_errno() . "<br>";
   echo "Error message: " . mysqli_connect_error() . "<br>";
   die();
}
?>
