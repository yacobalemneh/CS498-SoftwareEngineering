<?php
    // list reviews from each class
    echo "<link rel='stylesheet' type='text/css' href='getreviewsStyle.css' />";

    $count = 1;
    $class = $_POST['classes'];

    echo "<h1 id ='h1'> RateMyCourse";
    echo "</h1>";
    echo "<br> <br> <br>" ;
    echo "<div id= 'submit_review'> " ;
    echo "<h2> Class you selected: ";
    echo "$class";
    echo "</h2>";
    echo "<br> <br> " ;




    $mysqli = new mysqli('sql103.epizy.com', 'epiz_23744465', 'ZJjYMvI29', 'epiz_23744465_project');

    if ($mysqli->connect_errno) {
        echo "Could not connect to database \n";
        echo "Error: ". $mysqli->connect_error . "\n";
        exit;
    } else {
        $query = "SELECT review FROM reviews WHERE class = '$class'";
        $q_result = $mysqli->query($query);

        if ($q_result->num_rows === 0) {
            echo "No review for classes in this department: ". $department. "!\n";
        } else {
            //echo "there are reviews for this department";
            while($r = mysqli_fetch_array($q_result)){
                echo "Review " . $count . ": ";
                echo $r['review'];
                echo "<br> ";
                echo "\n";
                $count = $count + 1;
            }
        }
    }
    echo "<br> <br> <br> ";
    echo "</div>";
?>



<html>
<div id ='goHome'>
<form action="http://cs498project.epizy.com/home.php">
    <input type="submit" value="Go Home!" class ="submit"/>
</form>

</div>

</html>
