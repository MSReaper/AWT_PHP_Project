
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

$phone=$_POST['phone'];
$msg = $_POST['message'];

$qry  = "INSERT INTO feedback VALUES ('$username','$phone','$msg')";

if(mysqli_query($sql,$qry) == 1){

echo "<h3 class='text-center text-primary'>THANK YOU for your feedback..!</h3>";

echo"<a href='index1.php' role='button' class='btn'>Go back</a>";

}else

echo " " . mysqli_error();


}




?>
