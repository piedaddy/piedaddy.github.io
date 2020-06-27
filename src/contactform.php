<?php 

if (isset($_POST['submit'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "gabucha93@yahoo.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from ".$first_name.$last_name.".\n\n".$message;


  mail($mailTo, $headers, $txt);
  header("Location: index.php?mailsend");
  
}