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

    // TODO: Add a data structure which stores all the error texts and selects the right when for the current error.

    print <<< END
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>TimeIt - Page Not Found :(</title>
        
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" href="./../../style/generalised-error-page.css" type="text/css">
		
    </head>
  
    <body>
            
    <div class="container">
      
        <div class="error"><h1>$error_code Error</h1></div>
              
        <div class="warning">            
            <h2>"All those moments will be lost in time, like tears in rain."</h2>
            <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
            <a href="javascript:history.back()">Please go back to the previous page</a>
        </div>

        <div class="footer"><p class="copyright">&copy; Paul-Andrei Ionescu</p></div>        

    </div>

    </body>
    
    <script rel="script" src="./../../java-script/generalised-error-page.js"></script>   
</html> 
    
END;
}