<!--home.php. Is the main for this project -->

<!DOCTYPE html>
<html>
<head> 
        <!-- style things -->
        <link href="homeStyle.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto:400,900" rel="stylesheet">
    </head>

 <body>
 
  <h1 id = 'h1'> RateMyCourse </h1>
  <br> <br>
 <h3 id = 'search'> Search Reviews for Specific Class </h3>
   <!-- Handles the logic for searching reviews-->
   <div id="search_reviews" name="search_reviews">
      
        <form action="fetch_classes.php" method="get">
      
            <input type="text" id="department_name" name="department_name" placeholder="Enter Department Name" class = "inputbox">
            <input type="submit" id="submit2" name="department_submit" class = "submit">
        </form>
    </div>

  <br> <br> <br> 
   <!-- Handles the logic for submitting a review -->
  <h3 id = 'h3'> Submit A Review: </h3>
  
    <div id="submit_review" name="submit_review">

        <form action='submit_review.php' method="get">
           <br> <br>  <br>  <br> 
            <a> Enter Information Below: </a>
            <br>
            <input type="text" id="class" name="class" placeholder = "Enter Course Name and Number" class = "inputbox">
      
            <input type="text" id="department" name="department" placeholder = "Department Name" class = "inputbox"  >
      
            <input type="text" id="professor" name="professor" placeholder = "Instructor's Name" class = "inputbox">
    
            <input type="text" id="review" name="review" placeholder = "Rate Course from 1-5" class = "inputbox">
              <br>
            <input type="submit" id="submit" class="submit">
        </form>
    </div>



  </body>
</html>
