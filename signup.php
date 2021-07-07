



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Signup Account</title>
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

<h1>Signup here</h1><h3> <a href='login.php'  role='button'   class='btn btn-primary'>Login </a> 

	<br>



</div>

<div class="frame">

<form   action="signform.php"  method="post">

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Username</label>
<input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" required>


<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Phoneno</label>
<input type="tel" class="form-control" name="phone" id="exampleInputPassword1" required>
</div>

<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Email</label>
<input type="email" class="form-control" name="email" id="exampleInputPassword1" required>
<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
</div>
</div>

<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Password</label>
<input type="password" class="form-control" name="pass" id="exampleInputPassword1" required>
</div>



<div class="mb-3 form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>

<button type="submit" class="btn btn-primary" name="submit">Create account</button>




</form>


</div>

</body>
</html>