<?php
$con = mysqli_connect("localhost","root","","mydb");
if (!$con)
  {
  die('Could not connect: ');
  }

$sql="INSERT INTO  contact1(name,email,mobile,message) 
   VALUES  ('$_POST[name]','$_POST[email]','$_POST[mobile]','$_POST[message]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ');
  }
else
echo "<script>alert('Your message has been successfully submitted. Thank you for contacting us!');</script>";
mysqli_close($con);
?>