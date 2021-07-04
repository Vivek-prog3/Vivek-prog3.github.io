<?php
include('config.php');

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];


	{
      $INSERT="INSERT INTO feedback (First,Last,Email,Subject,Message)  values(?,?,?,?,?)";
	  $stmt =$conn->prepare($INSERT);
	  $stmt->bind_param("sssss",$fname,$lname,$email,$subject,$message);
	  $stmt->execute();
	  header("Location: contact.html");
      $stmt->close();
      $conn->close();
    }
	die();

  
?>