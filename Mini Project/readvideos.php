<?php
    include("config.php");
?>
<!doctype html>
<html>
    <head>
        <style>
            video{
                float: left;
            }
        </style>
    </head>
    <body>
        <div>
          
        <?php
        $fetchVideos = mysqli_query($conn, "SELECT * FROM maths ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($fetchVideos)){
            $location = $row['location'];
            echo"<h1 style='font-weight:bold;font-size:30px;text-align:center;'>Maths Videos </h1>";
            echo "<div >";
            echo "<video src='".$location."' controls width='320px' height='200px' >";
            echo "</div>";
        }
        ?>
          
        </div>

    </body>
</html>
