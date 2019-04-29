

<?php
    //Login.php: Handles the login functionality. 
    error_reporting(0);
    session_start();

    $username=$_POST['username'];
    $password=$_POST['password'];

    // now get user input
    // $un='password';
    // $db='project';
    $mysqli = new mysqli('sql103.epizy.com', 'epiz_23744465', 'ZJjYMvI29', 'epiz_23744465_project');

    //Basic error handling for if the database hasn't been connected to or is unavailable
    if ($mysqli->connect_errno) {
        echo "Could not connect to database \n";
        echo "Error: ". $mysqli->connect_error . "\n";
        exit;
    } 
    //Else we were able to connect.
    else {
        //If they have entered a value for login, get that data from the database
        if (isset($_POST['login'])) {
            $query = "SELECT username, password FROM login WHERE username = " . "'$username'";
        }
        //If this user doesn't have a login.
        if ($q_result->num_rows === 0) {
            echo "No login for this user! ". $username. "\n";
        } 
        //Else display the login information.
        else {
            echo "Here are the usernames and passwords from query: ". $username. "<br \>";
            while ($u_names = $q_result->fetch_assoc()) {
                echo $u_names["username"]. "<br \>";
            }
        }
    }
?>
