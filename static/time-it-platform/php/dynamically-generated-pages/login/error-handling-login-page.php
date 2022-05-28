<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />

    <title>TimeIt - Login</title>

    <!-- Bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet" crossorigin="anonymous">

    <!-- Custom stylesheet for this page. -->
    <link href="./../../../style/error-handling-login-page.css" rel="stylesheet" type="text/css">
</head>

<?php session_start(); ?>

<body>

<div class="container">
    <h1 class="text-center mt-5">Time It</h1>
    <p class="text-center mt-3 mb-3 error"><?php echo $_SESSION['loginFormError'];?></p>

    <form method="post">
        <div class="form-group text-center">
            <input type="text" placeholder="Username" aria-label="Username" name="username" class="col-form-label-lg">
        </div>

        <div class="form-group text-center mt-3">
            <input type="password" placeholder="Password" aria-label="Password" name="password" class="col-form-label-lg">
        </div>

        <div class="form-group text-center mt-3">
            <button type="submit" class="btn btn-primary" >Continue</button>
        </div>


    </form>
</div>


<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>

</html>


