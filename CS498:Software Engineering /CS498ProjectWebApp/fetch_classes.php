<?php
    echo "<link rel='stylesheet' type='text/css' href='fetchclassesStyle.css' />";
    $department=$_POST['department_name'];

    echo "<h1 id ='h1'> RateMyCourse </h1>";
    echo "<br> <br> <br>" ;
    echo "<div id= 'submit_review'> " ;
    echo "<h2> ";
    echo $department;
    echo " courses:";
    echo "</h2>";
    echo "<br> <br> " ;


    // write php select statement    
    $mysqli = new mysqli('sql103.epizy.com', 'epiz_23744465', 'ZJjYMvI29', 'epiz_23744465_project');

    if ($mysqli->connect_errno) {
        echo "Could not connect to database \n";
        echo "Error: ". $mysqli->connect_error . "\n";
        exit;
    } else {
        $query = "SELECT class FROM reviews WHERE department = '$department'";
        $q_result = $mysqli->query($query);

        if ($q_result->num_rows === 0) {
            echo "No review for classes in this department: ". $department. "!\n";
        } else {
            // populate dropdown here
            echo "<form action='get_reviews.php' method='POST'>";
            echo "<select name=classes> Dropdown </option>";
            while($r = mysqli_fetch_array($q_result)){
                echo "<option value=" . $r['class'] . ">" . $r['class'] . "</option>";
            }
            echo "</select>";
            echo "<br> <br> <br> <br> " ;

            echo "<input type='submit'  name='class_submit' class= 'submit'>";
            echo "</form>";
        }        
    }
    echo "<br>  ";
    echo "</div>";
?>

<html>
<div id ='goHome'>
    <form action="http://cs498project.epizy.com/home.php">
        <input type="submit" value="Go Home!" class ="submit"/>
    </form>

</div>

</html>

