<?php
    // TODO: SUBMIT CLASS, DEPARTMENT, AND REVIEW TO DATABASE
    error_reporting(0);
    session_start();

    $class=$_POST['class'];
    $department=$_POST['department'];
    $professor=$_POST['professor'];
    $review=$_POST['review'];


    $mysqli = new mysqli('sql103.epizy.com', 'epiz_23744465', 'ZJjYMvI29', 'epiz_23744465_project');

    if ($mysqli->connect_errno) {
        echo "Could not connect to database \n";
        echo "Error: ". $mysqli->connect_error . "\n";
        exit;
    } else {
        $query = "INSERT INTO reviews (class, department, professor, review) VALUES ('$class', '$department', '$professor', '$review')";
        $q_result = $mysqli->query($query);
        
        if ($q_result->num_rows === 0) {
            echo "Did not successfully insert the information!\n";
        } else {
//            echo "Your information has been received! $class $department $professor $review";
            readfile("submitReview.html");
        }
    }
?>

<!--<html>-->
<!--    <a href="http://cs498project.epizy.com/home.php">home</a>-->
<!--</html>	-->
