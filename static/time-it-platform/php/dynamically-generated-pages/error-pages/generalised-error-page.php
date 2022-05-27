<?php

function load_corresponding_error_page($error_code){
    /**
     * @param $error_code; a string object which represents the code number of the error which was triggered by the user.
     *
     * This here method dynamically generates an error page which is built atop a general template which display the
     * proper message and error code in accordance with the error code which was give to this method as an argument.
     *
     * @author: Andrei-Paul Ionescu
     */

    // Retrieve the json file containing all the errors and their associated information.
    $errors = file_get_contents("./../../json/errors.json");

    if($errors == false){
        // If an error occurs whilst opening the json file showcased this to the current user.
        // !IMPORTANT! In later version of the app such a behaviour will generate a warning to be transmitted to the
        // admins page thus enabling them to visualise a predefined report on the matter rather than allowing the
        // average user to see what the issue is, thus in cases of failure the user will see a bland and generic error
        // page.

        echo '<h1 style="text-align: center">The json file could not be opened</h1>';
    }

    // Decode the json file so as to have access to the information.
    $decoded_errors = json_decode($errors, true);

    // Store local copies of the error message and the page title so as to add them in the dynamically generated page.
    $current_error_message = "";
    $current_page_title    = "";

    // Loop thru the json objects and retrieve the record that matches the current error code.
    foreach($decoded_errors['errors'] as $error){

        if($error['error_code'] == $error_code){
            // Save the information so we can later use it in the dynamically generated page and then break out from the
            // for loop.

            $current_error_message = $error['error_message'];
            $current_page_title    = $error['page_title'];
            break;
        }
    }

    print <<< END
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>TimeIt - $current_page_title</title>
        
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" href="./../../style/generalised-error-page.css" type="text/css">
		
    </head>
  
    <body>
            
    <div class="container centre-of-the-page">
      
        <div class="error"><h1>$error_code Error</h1></div>
              
        <div class="warning">            
            <h2>"All those moments will be lost in time, like tears in rain."</h2>
            <p>$current_error_message</p>
            <a href="javascript:history.back()">Please go back to the previous page</a>
        </div>

        <div class="footer"><p class="copyright">&copy; Paul-Andrei Ionescu</p></div>        

    </div>

    </body>
    
    <script rel="script" src="./../../java-script/generalised-error-page.js"></script>   
</html> 
    
END;

    // Liberate the occupied memory.
    unset($errors, $decoded_errors, $current_error_message, $current_page_title);
}