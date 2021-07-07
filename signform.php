	<?php

session_start();

$server = "localhost";
$username = "root";
$password="";
$database="hoteldata";

$mysql = mysqli_connect("$server","$username","$password","$database");

if($mysql == FALSE){

echo "Connection Error!" ;



}

if (isset($_POST['submit'])) {

$user = $_POST['name'];
$phone= $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "INSERT INTO signup VALUES ('$user','$phone','$email','$pass')";

if(mysqli_query($mysql,$sql) == 1){

$msg1 = "Account created Succesfully";

echo"<a href='index1.php' role='button' class='btn'>Go back</a>";

  echo " "  .  $msg1 . " ";

}else



echo "Error in Account Creation!  Try again after some time ! ";





}    

session_destroy();
?>