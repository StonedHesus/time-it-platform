<!doctype HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <title>TimeIt - Welcome to TimeIt where everything finds its right place in your schedule.</title>

    <!-- Bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Cookies and terms stylesheet -->
    <link href="./static/time-it-platform/style/cookies-and-terms.css" rel="stylesheet" type="text/css">
</head>

<body>
<header class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand" href="./index.php">TimeIt</a>

    <!-- Add a button which enables the user to access the navbar's options when the screen size is to small so as to
    showcase them all on screen.-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">About Us</li>
            <li class="nav-item active">Meet the team</li>
        </ul>

    </div>

    <!-- Login form -->
    <form class="form-inline my-2 my-lg-0" method="post">
        <input class="form-control mr-sm-2" type="username" placeholder="Username" aria-label="Username" name="username">
        <input class="form-control mr-sm-2" type="password" placeholder="Password" aria-label="Password" name="password">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
    </form>

</header>


<div id="accept-terms-popup" class="hidden">
    <p>By using this site you agree to our <a href="#">Terms and Conditions</a>.
        Please <a id="accept" href="#">Accept</a> these before using the site.
    </p>
</div>

</body>

<!-- Main bootstrap script. -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- Terms and services script. -->
<script src="./static/time-it-platform/java-script/cookies-and-terms.js"></script>

</html>