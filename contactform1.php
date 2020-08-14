<?php 
  //creating connection to database
$con=mysqli_connect("localhost","root","","onlinehospitalmanagementsystem") or die(mysqli_error());

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['name']);
$Email = $con->real_escape_string($_POST['email']);
$Payt = $con->real_escape_string($_POST['payt']);
$message = $con->real_escape_string($_POST['text']);

  //query to insert the variable data into the database
$sql="INSERT INTO zoom (name, email, payt, message) VALUES ('".$Name."','".$Email."', '".$Payt."', '".$message."')";

  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $con->error . ']');
}
else
   echo "Thank you! Your Request Has been received We will get in touch with you soon";
}
?>