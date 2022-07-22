<?php
include "./connect.php";
if(isset($_POST['post_my_story'])){
    $story = $_POST['textarea'];    
    echo $story;
    $sql = "UPDATE USERS SET story='$story' WHERE user_id ='$id'";
    if (mysqli_query($connectdb,$sql)) {
        $data = [
          'success' => 'Story posted succesfully'
        ]; 
        $response = json_encode($data);
        echo($response);
    //    header("location:./home.php");
        

    }
}
?>