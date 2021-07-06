
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content />
<meta name="author" content />
<title>Contact Us</title>
<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<!-- Bootstrap icons-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
<!-- Core theme CSS (includes Bootstrap)-->
<link href="css/styles.css" rel="stylesheet" />
</head>
<body class="d-flex flex-column">
<main class="flex-shrink-0">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container px-5">
<a class="navbar-brand" href="index.html"> Skandashree restaurant</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
<li class="nav-item"><a class="nav-link" href="index1.php">Home</a></li>
<li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
<li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li>
<li class="nav-item"><a class="nav-link" href="feedback.php">feedback</a></li>
<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">More</a>
<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
<li><a class="dropdown-item" href="portfolio-overview.php"> Food-Gallery</a></li>
<li><a class="dropdown-item" href="portfolio-item.php">Order here</a></li>
<li><a class="dropdown-item" href="complaints.php">Complaints/query</a></li>
</ul>
</li>
</ul>
</div>
</div>
</nav>
<!-- Page content-->
<section class="py-5">
<div class="container px-5">
<!-- Contact form-->
<div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
<div class="text-center mb-5">
<div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
<h1 class="fw-bolder">Get in touch with us</h1>
<p class="lead fw-normal text-muted mb-0">We'd love to hear from you</p>
</div>

<!--this is the form ################-->
<div class="row gx-5 justify-content-center">
<div class="col-lg-8 col-xl-6">


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
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg = $_POST['message'];

$qry  = "INSERT INTO contact VALUES ('$username','$email','$phone','$msg')";

if(mysqli_query($sql,$qry) == 1){

echo "<h3>THANK YOU for contacting us . we will shortly contact you..</h3>";
}else

echo " " . mysqli_error();


}




?>


<form action="" method="post">
<div class="form-floating mb-3">
<input class="form-control" id="inputName" type="text" name="name" placeholder="Enter your name..."  required/>
<label for="inputName">Full name</label>
</div>
<div class="form-floating mb-3">
<input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" required/>
<label for="inputEmail">Email address</label>
</div>
<div class="form-floating mb-3">
<input class="form-control" id="inputPhone" type="tel" name="phone" placeholder="(123) 456-7890" required/>
<label for="inputPhone">Phone number</label>
</div>
<div class="form-floating mb-3">
<textarea class="form-control" id="inputMessage" type="text" name="message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
<label for="inputMessage">Message</label>
<br>
<br>

<button class="btn btn-primary " type="submit" name="submit">Submit</button>
</div>
</form>




</div>
</div>
</div>
<!-- Contact cards-->
<div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
<div class="col">
<div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
<div class="h5 mb-2">Chat with us</div>
<p class="text-muted mb-0">Chat live with one of our team members</p>
</div>


<div class="col">
<div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
<div class="h5">Call us</div>
<p class="text-muted mb-0">Call us during normal business hours at +91- </p>
</div>
</div>
</div>
</section>
</main>
<!-- Footer-->
<footer class="bg-dark py-4 mt-auto">
<div class="container px-5">
<div class="row align-items-center justify-content-between flex-column flex-sm-row">
<div class="col-auto"><div class="small m-0 text-white">Copyright &copy; skandashree restaurant</div></div>
<div class="col-auto">
<a class="link-light small" href="#!">Privacy</a>
<span class="text-white mx-1">&middot;</span>
<a class="link-light small" href="#!">Terms</a>
<span class="text-white mx-1">&middot;</span>
<a class="link-light small" href="coontact.html">Contact</a>
</div>
</div>
</div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
