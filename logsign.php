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
	<div class="pimg7">  
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
  
    
   
<div class="container" id="container">
	<div class="form-container sign-up-container" >
			<form action="connect.php" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook"></i></a>
				<a href="#" class="social"><i class="fa fa-google"></i></a>
				<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="name" name="username" placeholder="Name" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="validation.php" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook"></i></a>
				<a href="#" class="social"><i class="fa fa-google"></i></a>
				<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
			</div>
			<span>or use your account</span>
			<input type="name" name="username" placeholder="Username" />
			<input type="password" name="password" placeholder="Password" />
			<a href="logsign.php">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<span>To keep connected with us please login<br> with your personal info</span>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<span>Enter your personal details and<br> start journey with us</span>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
   
    </div>
<script src="javascript.js"></script>

</body>
</html>