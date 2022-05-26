<?php

require_once './../dynamically-generated-pages/error-pages/generalised-error-page.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // If the user had properly submitted a POST request then respond to it accordingly.

    echo '<h1>Welcome</h1>';
} else{

    // If someone tries to access the page via its path, that is without broadcasting a POST request then redirect them
    // to a dynamically generated error page which will invite to go back to the main page.
    load_corresponding_error_page("404");
}