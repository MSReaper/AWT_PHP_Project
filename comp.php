
<?php

session_start();

if(isset($_POST['submit'])){


$server = "localhost";
$user = "root";
$pass = "";
$db = "hoteldata";

$sql = mysqli_connect($server,$user,$pass,$db);

if($sql == false){

echo  " Connection error code 118#
!!";


}

$username = $_POST['name'];
$message=$_POST['message'];


$qry  = "INSERT INTO complaints VALUES ('$username','$message')";

if(mysqli_query($sql,$qry) == 1){

echo "<h4>Your query has been received !we will look into your doubts and contact you soon!</h4>";


echo"<a href='index1.php' role='button' class='btn'>Go back</a>";




}else

echo " " . mysqli_error();


}




?>