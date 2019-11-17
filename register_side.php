<?php
    session_start();
?>
<head>
    <title>Register</title>
    <!-- ICON -->
    <link href = "img/cleaning-ConvertImage.png" rel = "icon"/>

    <!-- NAVBAR STYLESHEET -->
    <link href="./css/navbar.css" rel="stylesheet"/>
    <link href="./css/register_side.css" rel="stylesheet"/>
    <link href="lib/bootstrap.min.css" rel="stylesheet"/>
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
                        <li class="nav-element">
                            <a class="nav-link" href="maideasy.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <div class = "space" style = "color:transparent;">&nbsp</div>
                        <li class="nav-element">
                            <a class="nav-link" href="maideasy.php#about">About</a>
                        </li>
                        <div class = "space" style = "color:transparent;">&nbsp</div>
                        <li class="nav-element">
                            <a class="nav-link" href="maideasy.php#services">Services</a>
                        </li>
                        <div class = "space" style = "color:transparent;">&nbsp</div>
                        <li class="nav-element current">
                            <a class="nav-link" href="maideasy.php#register">Register</a>
                        </li>
                        <div class = "space" style = "color:transparent;">&nbsp</div>
                        <li class="nav-element">
                            <a class="nav-link" href="maideasy.php#contact">Contact</a>
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

    <div class = "register-bg">
            <div class = "block" id = "register" style="color: white;">
                <div class = "container" style = "display: flex;">
                    <div class = "register-container">
                            <div id = "title" >REGISTER</div>
                            <div>&nbsp</div>
                            <div>&nbsp</div>
                            <form id = "register-form">
                                <div id = "register-fields">
                                    <div class = "fields">
                                        <div>COMMUNITY NAME</div>
                                        <div>&nbsp</div>
                                        <div>COMMUNITY EMAIL</div>
                                        <div>&nbsp</div>
                                        <div>COMMUNITY TYPE</div>
                                    </div>
                                    <div class = "inputs">
                                        <input class = "input-box" type="text" name="community-name">
                                        <div>&nbsp</div>
                                        <input class = "input-box" type="text" name="community-email">
                                        <div>&nbsp</div>
                                        <div class = "community">
                                            <input class = "rad" type="radio" name = "community-type" value="apartment" checked> Apartment  
                                            <br>
                                            <input class = "rad" type="radio" name = "community-type" value="gated"> Gated Community
                                            <br>
                                            <input class = "rad" type="radio" name = "community-type" value="independent"> Independent House  
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div>&nbsp</div>
                                <div>&nbsp</div>
                                <div>&nbsp</div>
                                <div>&nbsp</div>
                                <div align = "center">
                                    <input id = "message-submit" type="submit" value="Submit">
                                </div>
                            </form>
                    </div>
                    <div class = "space-register">&nbsp</div>
                    <img src = "img/apartment.jpg" id = "image">
                </div>
            </div>
        </div>
</body>
<script src="lib/register_side.js"></script>