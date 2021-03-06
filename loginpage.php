<?php
	session_start();
	if(isset($_SESSION["Username"]))
	{
		echo "<script>alert('Already Logged in');</script>";
		header("index.html");
	}
?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>MaidEasy</title>
		<!-- ICON -->
		<link href = "img/cleaning-ConvertImage.png" rel = "icon"/>

		<!-- NAVBAR STYLESHEET -->
        <link href="./css/navbar.css" rel="stylesheet"/>
        <link href="./css/home.css" rel="stylesheet"/>
        <link href="lib/bootstrap.min.css" rel="stylesheet"/>
        <link href="./css/about.css" rel="stylesheet"/> 
        <link href="./css/contact.css" rel="stylesheet"/>
		<link href="./css/services.css" rel="stylesheet"/>
		<link href="./css/login.css" rel="stylesheet"/>
    </head>	
	<body>
		<div>
			<nav id = "navbar" class="navbar navbar-expand-lg navbar-light shadow fixed-top" style = "background-color:transparent">
				<div class="container" >
					<a class="navbar-brand" href="#home">Maid Easy</a>
						<button id = "navbar-ham" class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarResponsive">
							<ul class="navbar-nav ml-auto">
							<li class="nav-element current">
								<a class="nav-link" href="index.php">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<div class = "space" style = "color:transparent;">&nbsp</div>
							<li class="nav-element">
								<a class="nav-link" href="index.php#about">About</a>
							</li>
							<div class = "space" style = "color:transparent;">&nbsp</div>
							<li class="nav-element">
								<a class="nav-link" href="index.php#services">Services</a>
							</li>
							<div class = "space" style = "color:transparent;">&nbsp</div>
							<li class="nav-element">
								<a class="nav-link" href="index.php#register">Register</a>
							</li>
							<div class = "space" style = "color:transparent;">&nbsp</div>
							<li class="nav-element">
								<a class="nav-link" href="index.php#contact">Contact</a>
							</li>
							<div class = "space" style = "color:transparent;">&nbsp</div>
							<li class="nav-item dropdown nav-element" id="more">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									More
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<?php if(!isset($_SESSION["Username"])){ ?>
                                        <a class="dropdown-item nav-element" id="loginButton" style="color: white" href="loginpage.php">Login</a>
                                        <a class="dropdown-item nav-element" id="signupButton" style="color: white" href="signuppage.php">Sign Up</a>
                                    <?php } else { ?>
                                        <a class="dropdown-item nav-element" id="logoutButton" style="color: white" href="requestpage.php">Request</a>
                                        <a class="dropdown-item nav-element" id="logoutButton" style="color: white" href="logout.php">Logout</a>
                                    <?php } ?>
								</div>
								</li>
							</ul>
						</div>
				</div>
			</nav>
		</div>
		<div class="loginbox">
			<form action="login.php" method="post">
				<p id="form-label"> Username </p>
				<input type="text" name="username" placeholder="xyz@example.com" required="text" > <br><br>
				<p id="form-label"> Password</p>                             
				<input type="password" name="passwd" placeholder="Enter Password" required="text"> <br><br> 
				<a href="#">Forgot Password?</a><br><br>  
				<input type="submit" name="Submit" 
					value="           SUBMIT           " >
			</form>
			<div>
				<p style="color:white" id="create-account"> Don't have an account yet?
				<br> <a href="signup.html" id="create-account">Create an Account</a></p>
			</div>
		</div>	
	</body>
	<!-- SCRIPTS -->
    <script src="lib/jquery.slim.min.js"></script> 
    <script src="lib/bootstrap.bundle.min.js"></script>
    <script src="lib/active-block.js"></script>
    <script src="lib/navbar.js"></script>
    <script src="lib/type.js"></script>
</html>
