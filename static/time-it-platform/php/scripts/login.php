<?php

require_once './../dynamically-generated-pages/error-pages/generalised-error-page.php';

// Initialise the variables we require for this script.
$username = $password = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // If the user had properly submitted a POST request then respond to it accordingly.
    session_start();

    // Check whether both fields were submitted empty and take appropriate actions for this particular situation.
    if(empty(trim($_POST['username'])) && empty(trim($_POST['password']))){
        $_SESSION['loginFormError'] = "Please fill-in the form";
        unset($username, $password);
        header('Location: ./../dynamically-generated-pages/login/error-handling-login-page.php');
        exit();
    }

    // Check whether the username field was transmitted empty or not to the server and take appropriate
    // actions according to what is the case.
    if(empty(trim($_POST['username']))){
        // If no username was specified then prompt the user to type one in.
        $_SESSION['loginFormError'] = "Please type-in an username";
        unset($username, $password);
        header('Location: ./../dynamically-generated-pages/login/error-handling-login-page.php');
        exit;
    } else {
        // If not clean the input and store it in the $username variable.
        $username = trim($_POST['username']);
    }

    // Check whether or not the password field is empty and take appropriate actions according to what is the case.
    if(empty(trim($_POST['password']))){
        // If no password was specified then prompt the user to type one in by raising an error.
        $_SESSION['loginFormError'] = "Please enter your password.";
        unset($username, $password);
        header('Location: ./../dynamically-generated-pages/login/error-handling-login-page.php');
        exit();
    } else {
        // If the password was provided then clean the input and store it in the $password variable.
        $password = trim($_POST['password']);
    }

    $query = "SELECT * FROM users WHERE user_Username = :username LIMIT 1";
} else{

    // If someone tries to access the page via its path, that is without broadcasting a POST request then redirect them
    // to a dynamically generated error page which will invite to go back to the main page.
    load_corresponding_error_page("403");
}

// Liberate the occupied memory.
unset($username, $password);