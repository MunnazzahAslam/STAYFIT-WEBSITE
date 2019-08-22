<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="IMAGES/logoo.png"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>StayFit | StayFit.com </title>
  <link rel="stylesheet" href="css/style.css">
  <script src="javascript.js"></script>

</head>


<body>
  <div class="pimg9">  
  <nav>
    <div class="row clearfix">
        <a href="index.php"> <img src="IMAGES/logoo.png" class="logo"></a>    
         <ul class="main-nav" >
          <li><a href="index.php">ABOUT</a></li>
          <li><a href="food.php">FOOD</a></li>
          <li><a href="exercise.php">EXERCISE</a></li>
          <li><a href="bmi.php">BMI</a></li>
          <li><a href="blog.html">BLOG</a></li>
          <li><a href="premium.html">PREMIUM</a></li>
          <li><a href="logsign.php">LOGIN</a></li>
          <li><a href="logsign.php">SIGNUP</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
         </ul>
    </div>
  </nav>
<form class="myform">  <?php 
$username= 'root';
$password= '';
$db= 'stayfit';
$con= mysqli_connect('localhost', $username, $password, $db) ;
$query = $_GET['query'];

$s="SELECT * FROM food
            WHERE (`food_name` LIKE '%".$query."%') OR (`calories` LIKE '%".$query."%')" or die(mysqli_error());
      
        $result = mysqli_query($con , $s);
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         if ($result === FALSE){
            // you can also check the error message you are getting from mysql
            // var_dump(mysqli_error($con));
            // you could do a var_dump of $query here to see what exactly you pass as a query to the database.
            // var_dump($query);
            echo "<script>alert('** Query failed executing **')</script>";
        }
        elseif(mysqli_num_rows($result) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($result)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<h3><u>Food Name: </u>   ".$results['food_name']."</h3>"."<h3><u>Calories:    </u>".$results['calories']."</h3>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    
?></form>
</div>
 <footer class="flex-rw">
  
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">About StayFit</h4></li>
    <li><a href=" " style="color: black">Get To Know Us</a></li>
    <li><a href=" " style="color: black">Promos</a></li>
    <li><a href=" " style="color: black">Be a part of StayFit Family</a></li>

  </ul>
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">Help</h4></li>


    <li><a href=" " style="color: black">FAQ</a></li>
    <li><a href="" style="color: black">Contact</a></li>
    
  </ul>
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">Learn More</h4></li>


    <li><a href="" style="color: black">About StayFit</a></li>
    <li><a href=" " style="color: black">Health Education</a></li>
    
  </ul>
 
  
 
  <section class="footer-bottom-section flex-rw">
<div class="footer-bottom-wrapper">   
<i class="fa fa-copyright" role="copyright">
 
</i> Copyright © 2019<span class="footer-bottom-rights"> - All Rights Reserved</span>
    </div>
    <div class="footer-bottom-wrapper">
    <a href="/terms-of-use.html" style="color: black" class="generic-anchor" rel="nofollow">Terms</a> | <a href="/privacy-policy.html"style="color: black" class="generic-anchor" rel="nofollow">Privacy</a>
      </div>
  </section>
</footer>
</body>
</html>
