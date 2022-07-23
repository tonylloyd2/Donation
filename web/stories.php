<?php
include "./connect.php";

$query = mysqli_query($connectdb,"SELECT story , name , id , profile FROM users order by id;");
$data = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mchango stories</title>
    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome
            /5.15.4/css/all.min.css">
    <!-- css -->
    <link rel="stylesheet" href="css/stories.css">
    

</head>
<body>
    <section class="blog">
        <h1 class="heading" style="color:blueviolet ;">Mchango stories</h1>
        <div class="box-container">
        <?php
          if (mysqli_num_rows($query) > 0) {
            # code...
            for ($i=1; $i <= mysqli_num_rows($query) ; $i++) { 
                $query_individual = mysqli_query($connectdb,"SELECT story , name , id , profile FROM users where id='$i' order by id;");
                $individual_data = mysqli_fetch_assoc($query_individual);
          ?> 
            <div class="box shadow">
                <div class="image">
                    <img src="<?php echo $individual_data['profile']; ?>" alt="">
                    <h3><i class="fas fa-heart"></i><?php echo $individual_data['id']; ?></h3>
                </div>
                <div class="content">
                    <h3>
                    <?php echo $individual_data['name']." story's"; ?>
                    </h3>
                    <p>Everything i've been through</p>
                    <form action="./view_story.php" method="post">
                        <a href="#" class="btn">
                            <input type="text" value = "<?php echo($individual_data['name']); ?>" name="id" hidden>
                            <button type="submit" class="btn" name="view_my_story" style="color:green ;">read more</button>
                        </a>
                    </form>
                </div>

            </div>
           <?php
             }
            }
           else if (mysqli_num_rows($query) <= 0){
            
           ?>
           <h1>
           <p>no story has been posted</p>
           </h1>
          <?php
           }
          ?>
        </div>
    </section>

</body>
</html>