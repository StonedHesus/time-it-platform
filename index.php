<!doctype HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <title>TimeIt - Welcome to TimeIt where everything finds its right place in your schedule.</title>

    <!-- Bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Cookies and terms stylesheet -->
    <link href="./static/time-it-platform/style/cookies-and-terms.css" rel="stylesheet" type="text/css">

    <!-- index.php main stylesheet -->
    <link href="./static/time-it-platform/style/index.css" rel="stylesheet" type="text/css">

</head>

<body>
<header>

<?php
    // Initialise a new session and check whether any script relating user login had been validated, this feat is done
    // by ascertaining whether or not the 'loggedin' key in the session dictionary is set or not.
    session_start();
    if(!isset($_SESSION['loggedin'])) $_SESSION['loggedin'] = false;
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand ml-2" href="./index.php">TimeIt</a>

        <!-- Add a button which enables the user to access the navbar's options when the screen size is to small so as to
        showcase them all on screen.-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="mainNavbar">

            <ul class="navbar-nav ml-auto w-100 justify-content-end">
                <li class="nav-item active"><a class="nav-link" href="#">About Us</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">Meet the team</a></li>
            </ul>

        </div>

    </div>

</nav>

</header>

<!-- Greetings message section starts here -->
<section class="gradient-background" id="welcome-section">

    <div class="container">

        <h1 class="text-center pt-5">Welcome to TimeIt!</h1>
        <p class="text-center pt-5 pb-3">Where you can find the most convenient way to manage and create your timetables.</p>

    </div>

    <!-- Login form -->
    <!-- The login form will only be displayed if a user is not currently connected to the application -->
    <div class="container solid-background" id="float-in-from-the-left">
        <form class="form-inline my-2 my-lg-0" method="post" style="display: inherit;"
                action="./static/time-it-platform/php/scripts/login.php">
  
            <div class="form-group row">
                <div class="col-sm-10 pb-3">
                     <input class="form-control mr-sm-2" type="text" placeholder="Username" aria-label="Username" name="username" id="username">
                </div>
            </div>
                   
            <div class="form-group row">
                <div class="col-sm-10 pb-3">
                    <input class="form-control mr-sm-2" type="password" placeholder="Password" aria-label="Password" name="password">
                </div>
            </div>
                   
            <div class="form-group row">
                <div class="col-sm-10">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                        <label class="form-check-label" for="autoSizingCheck">
                          Remember me
                        </label>
                    </div>
                </div>
        </form>
    </div>
</section>
<!-- Ends here -->

<!-- About us section starts here. -->
<section class="about-us">
    <div class="container">
        <h1 class="text-center mt-5">About us</h1>
        <ul class="list-inline">
            <li class="list-group-item">
                <i class="fa-solid fa-chart-simple"></i>
            </li>

            <li>
                <i class="fa-solid fa-calendar"></i>
            </li>

            <li>
                <i class="fa-solid fa-person"></i>
            </li>

            <li>
                <i class="fa-solid fa-champagne-glasses"></i>
            </li>
        </ul>
    </div>
</section>
<!-- Ends here -->

<!-- Meet the team sections commences here. -->
<section class="meet-the-team mt-5">
    <div class="container">
        <h1 class="text-center">Meet the team</h1>
    </div>
</section>
<!-- Ends here. -->

<!-- Footer of the page starts here -->
<footer class="w-100 py-4 flex-shrink-0 bg-light">
    <div class="container py-4">
        <div class="row gy-4 gx-5">
            <div class="col-lg-4 col-md-6">
                <h5 class="h1">FB.</h5>
                <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved.</p>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="mb-3">Quick links</h5>
                <ul class="list-unstyled text-muted">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Get started</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="mb-3">Quick links</h5>
                <ul class="list-unstyled text-muted">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Get started</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="mb-3">Newsletter</h5>
                <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                <form action="#">
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
<!-- Ends here -->

<div id="accept-terms-popup" class="hidden bg-dark">
    <p class="text-light">By using this site you agree to our <a href="#">Terms and Conditions</a>.
        Please <a id="accept" href="#">Accept</a> these before using the site.
    </p>
</div>

</body>

<!-- Main bootstrap JavaScript bundled with Popper. -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<!-- Terms and services script. -->
<script src="./static/time-it-platform/java-script/cookies-and-terms.js"></script>
<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/3ba5977250.js" crossorigin="anonymous"></script>

</html>