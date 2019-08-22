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

</head>
<body>
  <div class="pimg1">  
  <nav>
    <div class="row clearfix">
        <a href="index.php"> <img src="IMAGES/logoo.png" class="logo"></a>    
         <ul class="main-nav">
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

  <h1 style="color: black "><center>CONTACT FORM</center></h1><br>
    <form action="contactres.php" method="post" name="contactform" class="formf">
      <label>Enter your name:</label>
        <input type="text" name="name" class="button" style="width: 97%;">
        <br>
      <label>Enter your email:</label>
        <input type="text" name="email"  class="button" style="width: 97%;">
        <br>
      <label for="rating">Rating</label>
    <select id="country" name="rating" style="width: 100%; height: 50px;">
      <option>1</option>
      <option>2-5</option>
      <option>6-9</option>
      <option>10</option>
    </select>
    <br>
 <label for="comments">Subject</label>
 
    <textarea id="comments" name="comments" placeholder="Write your feedback.." style="height:100px; width:100%;"></textarea>
 <br>     
      <button>Submit</button>
<br>
</form>

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