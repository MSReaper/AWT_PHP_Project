
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
$food=$_POST['food'];
$quant=$_POST['quantity'];
$place= $_POST['place'];
$phone=$_POST['phone'];

$qry  = "INSERT INTO user_orders VALUES ('$username','$food','$phone','$quant','$place')";

if(mysqli_query($sql,$qry) == 1){

echo "<h3>Your Order has been placed</h3>";

echo"<a href='index1.php' role='button' class='btn'>Go back</a>";

}else

echo " " . mysqli_error();


}




?>