


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login  Account</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />


<style type="text/css">

body{

background-color: grey;


}
.frame{

background-color:  white;
border: border;
border-radius: 25px;
margin-right: 600px;
margin-left: 600px;

margin-top: 100px;

padding-top: 100px;
padding: 25px;

}
.jumbotron{

background-color: white;

border: border;
border-radius:  15px;
margin-top:  30px;
padding: 25px;
margin-right: 230px;
margin-left: 230px;
padding-top: 25px;



}

</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container px-5">
<a class="navbar-brand" href="index.html">Welcome to Skandashree Restaurant</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
<li class="nav-item"><a class="nav-link" href="signup.php">SignUp</a></li>
<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>

</ul>
</div>
</div>
</nav>

<div class="jumbotron" >

<h1> Login here..</h1> 

</div>

<div class="frame">

<form   action=""  method="post">

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Email address</label>
<input type="email" class="form-control" id="exampleInputEmail1"  name="email"   aria-describedby="emailHelp" required>
<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>

<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Password</label>
<input type="password" class="form-control"  name="pass" id="exampleInputPassword1" required>
</div>

<div class="mb-3 form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>

<button type="submit" class="btn btn-primary" name="login">Login</button>

<h5 class="text-danger text-center"></h5>

<?php

session_start();




if(isset($_POST['login'])) {



$server = "localhost";

$username = "root";

$password="";

$database="hoteldata";

$mysql = mysqli_connect("$server","$username","$password","$database");

if($mysql == FALSE){

echo "Connection Error!" ;



}

$email = $_POST['email'];
$pass = $_POST['pass'];


$s = "SELECT * FROM signup WHERE email = '$email' and pass = '$pass'";

$result = mysqli_query($mysql, $s);


$num = mysqli_num_rows($result);

if($num == 1){

	if($_POST['email']==true)
	{
		//set cookie here.
		setcookie("email",$email,time()+60*60);

        setcookie("pass",$pass,time()+60*60);
// redirecting page
        header('location:index1.php');

        $_SESSION['email'] = $email;
	}

    header('location: index1.php');

        $_SESSION['email'] = $email;

}else{


    $msg = "Username Or Password  Is Incorrect!";

    echo " <h5 class='text-danger text-center' >$msg</h5>";

}




}

session_destroy();

?>




</form>


</div>

</body>
</html>