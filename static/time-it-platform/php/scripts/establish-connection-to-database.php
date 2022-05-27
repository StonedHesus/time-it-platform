<?php
function _connect_to_database($server, $user, $password, $database){
    /**
     * @param $server; the DNS of the application.
     * @param $user; the user which is trying to access the database.
     * @param $password; the password for that specific user.
     * @param $database; the database we are trying to access from within the application.
     *
     * This here method takes as argument the aforementioned variables and yields a new connection object which represents
     * an active session with the server which enables modification and access of the database if connection is successful
     * else it returns false thus letting the one using the function respond to the error as gracefully as it chooses.
     *
     * @author Andrei-Paul Ionescu.
     */

    // Create a new connection object with the aid of the mysqli_connect procedure.
    $connection = mysqli_connect($server, $user, $password, $database);

    // Check whether the connection was successful or not.
    if(!$connection){

        return false;
    } else {
        // If the connection was successful then set the current charset used by the application and return the
        // current connection object.
        mysqli_set_charset($connection, "utf-8");
        return $connection;
    }
}

function gathered_credentials_from_json(){
    /**
     * @param none;
     *
     * This here method returns the server, user, password and database values which are retrieved from within the
     * json database file, for now this file contains only one database hence this code assumes that this specification
     * holds so as to properly function.
     *
     * This function returns an array containing the information extracted from the json file.
     *
     * @author Andrei-Paul Ionescu
     */

    // Retrieve the json file containing all the errors and their associated information.
    $database = file_get_contents("./../../json/errors.json");

    if($database == false){
        // If an error occurs whilst opening the json file showcased this to the current user.
        // !IMPORTANT! In later version of the app such a behaviour will generate a warning to be transmitted to the
        // admins page thus enabling them to visualise a predefined report on the matter rather than allowing the
        // average user to see what the issue is, thus in cases of failure the user will see a bland and generic error
        // page.

        echo '<h1 style="text-align: center">The json file could not be opened</h1>';
    }

    // Decode the json file so as to have access to the information.
    $decoded_database = json_decode($database, true);

    return [$decoded_database['database']['server'], $decoded_database['database']['user'],
        $decoded_database['database']['password'], $decoded_database['database']['database']];
}

function connect_to_database(){
    /**
     * @param none;
     * @return a connection type object;
     *
     * This method combines the _connect_to_database and the gathered_credentials_from_json method so as to return a
     * connection mysqli object to the user which is calling the method without making him worry about the required data
     * for the connexion.
     *
     * @author Andrei-Paul Ionescu
     */

    $credentials = gathered_credentials_from_json();
    return _connect_to_database($credentials[0], $credentials[1],
        $credentials[2], $credentials[3]);
}