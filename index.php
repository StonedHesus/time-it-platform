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
<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container-fluid">

        <a class="navbar-brand ml-2" href="./index.php">TimeIt</a>

        <!-- Add a button which enables the user to access the navbar's options when the screen size is to small so as to
        showcase them all on screen.-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active"><a class="nav-link" href="#">About Us</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">Meet the team</a></li>
            </ul>

            <!-- Login form -->
            <form class="form-inline my-2 my-lg-0" method="post" style="display: inherit;"
                  action="./static/time-it-platform/php/scripts/login.php">

                <input class="form-control mr-sm-2" type="username" placeholder="Username" aria-label="Username" name="username" id="username">
                <input class="form-control mr-sm-2" type="password" placeholder="Password" aria-label="Password" name="password">

                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>

            </form>

        </div>

    </div>

</nav>

</header>


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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Terms and services script. -->
<script src="./static/time-it-platform/java-script/cookies-and-terms.js"></script>

</html>