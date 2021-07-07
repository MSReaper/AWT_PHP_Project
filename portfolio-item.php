
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content />
<meta name="author" content />
<title>Food ordering portal</title>
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
<li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>
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
<div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-globe"></i></div>
<h1 class="fw-bolder">Order for the food you like</h1>
</div>

<!--this is the form ################-->
<div class="row gx-5 justify-content-center">
<div class="col-lg-8 col-xl-6">




<form action="order.php" method="post">
<div class="form-floating mb-3">
<input class="form-control" id="inputName" type="text" name="name" placeholder="Enter your name..."  required/>
<label for="inputName">Full name</label>
</div>
<div class="form-floating mb-3">
<input class="form-control" id="inputEmail" type="text" name="food" placeholder="" required/>
<label for="inputEmail">Enter food </label>
</div>
<div class="form-floating mb-3">
<input class="form-control" id="inputPhone" type="number" name="phone" placeholder="" />
<label for="inputPhone">Enter phone number</label>
</div>
<div class="form-floating mb-3">
<input class="form-control" id="inputPhone" type="number" name="quantity" placeholder="" />
<label for="inputPhone">Enter quantity of food</label>
</div>
<label for="paymenttype">Enter pay type.</label>
<select  name="paymenttype">
	<option value="1">debit card </option>
		<option value="2"> credit  card </option>

	<option value="3"> upi  </option>

	<option value="4">cash on delivery </option>

</select>

<br>
<br>

<div class="form-floating mb-3">
<input class="form-control" id="inputPhone" type="text" name="place" placeholder="" />
<label for="inputPhone">Enter place..</label>
<br>
<br>

<button class="btn btn-primary " type="submit" name="submit">Order food</button>

</div>

</form>




</div>
</div>
</div>
<!-- Contact cards-->



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
