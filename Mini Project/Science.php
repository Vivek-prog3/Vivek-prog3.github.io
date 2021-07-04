<?php
session_start();
    include("config.php");
    if (!isset($_SESSION['username'])) {
        header("Location: Login.php");
    }
    
?>
<!doctype html>
<html>
    <head>
        <style>
            video{
                float: left;
            }
  
            .btn-grad1 {background-image: linear-gradient(to right, #00C9FF 0%, #92FE9D  51%, #00C9FF  100%)}
         .btn-grad1{
            margin: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: Black;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
      
      
          }

          .btn-grad1:hover {
            background-position: right center; /* change the direction of the change here */
            color: Green;
            text-decoration: none;
          }
         
        </style>
    </head>
    <body>
        <div>
          <a href="courses.php" ><button type="submit" class="btn-grad1" >Back</button></a>
          <a href="logout.php" ><button type="submit" class="btn-grad1" >Logout</button></a>
          
        <?php
        $fetchVideos = mysqli_query($conn, "SELECT * FROM science ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($fetchVideos)){
            $location = $row['location'];
           
            echo "<h1 style='font-weight:bold;font-size:30px;text-align:center;'>Science Videos </h1>";
            echo "<div >";
            echo "<video src='".$location."' controls width='320px' height='200px', margin-left:20px; >";
            echo "</div>";
        }
        ?>
          
        </div>

    </body>
</html>
