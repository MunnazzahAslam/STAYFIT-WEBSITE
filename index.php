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
 

</div>
     
    <div class="ptext">
      <span class="border"><h1>FITNESS STARTS WITH WHAT YOU EAT</h1>
  <p>Take control of your goals.<br> Track calories, breakdown<br> ingredients, and log activities with<br> <b>StayFit </b>.</p><br>
     </span>
           <button onclick="location.href='logsign.php';"> START FOR FREE </button>
      
    </div>
  

  <section class="section section-light">
    <h2>Search over 11 million foods in our database.
</h2>
    <p>
      What's in your food? Learn about calorie count, nutrition information and serving size.
    </p><form class="myform" action="search.php" action="GET">
    <input type="text" name="query" placeholder="Get the nutrition for any food, like an apple" name="search"/>
  <button type="submit"><i class="fa fa-search"></i></button>
     </form>
  </section>

  <div class="pimg2">
    <div class="ptext">
      <span class="border trans">The Tools for Your Goals<br>
        <p>Trying to lose weight, tone up, lower your BMI, <br>or invest in your overall health? We give you the right<br> features to hit your goals.</p>
        </span> <button onclick="location.href='bmi.php';"> LEARN MORE
      </button>
     </div>
  </div>

  <section class="section section-dark">
    <h2>Victory Stories</h2>
    <p>
   When you reach your goals, our whole community celebrates with you. Our members share in your victory—using it to inspire their own journey.
    </p>
    <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    
    <img src="images/attractive-beautiful-beauty-948875.jpg" style="width:600px; height: 600px;">
    <div class="text">I’ve learned that dieting doesn’t have to be difficult, and was really surprised I was allowed to <br>eat tasty things. This program was so easy to follow, and my cravings were gone after only a<br> few days!<br>
    <b>NIKKI, 21</b></div>
  </div>

  <div class="mySlides fade">
    
    <img src="images/s2.jpg" style="width:600px; height: 600px;">
    <div class="text">The best thing about Lifesum is the full overview you get on your nutrition. I’ve learnt how to prioritize my food which makes me even more motivated to continue my journey. I’ve tried <br> other similar apps before, but Lifesum is really easy to use and stick to.

   <b>MARIANNE, 26</b></div>
  </div>

  <div class="mySlides fade">
    
    <img src="images/beautiful-blurred-background-daylight-720598.jpg" style="width:600px; height: 600px;">
    <div class="text">This app is like the best thing that has happened to my health. I was shocked how my craving were gone after only a couple of days and not wanting to eat between meals really helped. Losing 5kg in only 3 weeks is fantastic, but the best part is the health improvement. I feel remarkably much better, have more energy, better mood, can play with my kids and do more than ever.

<b>NATHALIE, 27</b></div>
  </div>

 <div class="mySlides fade">
    
    <img src="images/person_3.jpg" style="width:600px; height: 600px;">
    <div class="text">This app is like the best thing that has happened to my health. I was shocked how my craving were gone after only a couple of days and not wanting to eat between meals really helped. Losing 5kg in only 3 weeks is fantastic, but the best part is the health improvement. I feel remarkably much better, have more energy, better mood, can play with my kids and do more than ever.

<b>JIM, 35</b></div>
  </div>
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">

<button onclick="this.style.visibility='hidden'; currentSlide(1);"> SEE REVIEWS! </button>
</div>
  </section>

<div class="pimg3">

    <div class="ptext">

            <span class="border trans">Recipes & Inspiration<br></span>
                </p><button onclick="location.href='blog.html';">
SEE MORE!
   </button>
    </div>
  </div>

  <section class="section section-lighter">
    <h2>Connect With Us and Be a Healthier Version of Yourself!</h2>
    <p>
      <i class="fa fa-apple"></i>Calorie Counter<br><i class="fa fa-book"></i>Personalized Diets<br><i class="fa fa-hospital-o"></i>Habit Trackers<br><i class="fa fa-video-camera"></i>Recipes
    </p><button onclick="location.href='logsign.php';">
SIGN UP
   </button>
  </section>


  <section>
      <div class="big">
  <div class="box">
    <div class="imgbox">
      <img src="images/chocolate-skillet-brownies-1-320x320.jpg">
    </div><div class="details">
  <div class="content"><h2>Brownies</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. </p>
    
  </div>
</div>
  </div>
    <div class="box">
       <div class="imgbox">
      <img src="images/turkey-sandwich-1-320x320.jpg">
    </div><div class="details">
  <div class="content"><h2>Sandwich</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. </p>
    
    
  </div>
</div></div>
     <div class="box">
        <div class="imgbox">
      <img src="images/caramel-overnight-oats-11-320x320.jpg">
     </div>
<div class="details">
  <div class="content"><h2>Caramel Bowl</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat.</p>
    
    
  </div>
</div>
   </div>
      <div class="box">
         <div class="imgbox">
      <img src="images/crab-cake-balls-1-320x320.jpg">
      </div><div class="details">
  <div class="content"><h2>Cake Balls</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat.</p>
   
    
  </div>
</div></div>

   </div></br>
 </br>
      </section>
 <footer class="flex-rw">
  
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">About StayFit</h4></li>
    <li><a href="index.php" style="color: black">Get To Know Us</a></li>
    <li><a href="index.php" style="color: black">Promos</a></li>
    <li><a href="logsign.php" style="color: black">Be a part of StayFit</a></li>

  </ul>
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">Help</h4></li>


    <li><a href="contact.php" style="color: black">FAQ</a></li>
    <li><a href="contact.php" style="color: black">Contact</a></li>
    
  </ul>
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">Learn More</h4></li>


    <li><a href="index.php" style="color: black">About StayFit</a></li>
    <li><a href="bmi.php" style="color: black">Health Education</a></li>
    
  </ul>
 
 
  <section class="footer-bottom-section flex-rw">
<div class="footer-bottom-wrapper">   
<ul><i class="fa fa-copyright" role="copyright">
 
</i> Copyright © 2019<span class="footer-bottom-rights"> - All Rights Reserved</span>
    </ul></div>
    <div class="footer-bottom-wrapper">
    <a href="/terms-of-use.html" style="color: black" class="generic-anchor" rel="nofollow">Terms</a> | <a href="/privacy-policy.html"style="color: black" class="generic-anchor" rel="nofollow">Privacy</a>
      </div>
  </section> <ul class="footer-list-top"><li>

<img class="imgme" src="images/m.png">Founder Of StayFit
  </li></ul>
</footer>
</body>
</html>
