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
  <div class="pimg24">  
  <nav>
    <div class="row clearfix">
        <a href="index.php"> <img src="IMAGES/logoo.png" class="logo"></a>    
         <ul class="main-nav">
          <li><a href="#user">User Details</a></li>
          <li><a href="#food">Food Details</a></li>
          <li><a href="#exercise">Exercise Details</a></li>
          <li><a href="#review">Review Details</a></li>
          <li><a href="index.php">Home</a></li>
         </ul>
    </div>
  </nav>


<?php
$username= 'root';
$password= '';
$db= 'stayfit';
$con= mysqli_connect('localhost', $username, $password, $db) ;


$query = "select * from user";
$member = mysqli_query($con, $query);
if (!$member) {
die($query);
}
?>
 <br><br><h1><center><u>USER DETAILS:</u></center></h1>
<table id="user" cellpadding="0" cellspacing="0" border="0">
 <tr>
   <TH>ID</TH> <th>Username</th><th>Password</th>
  </tr>
<?php while($row = mysqli_fetch_array($member)) { ?>
  <tr>
       <td style='width: 200px;'><?php echo $row['user_id']; ?></td> <td style='width: 600px;'><?php echo $row['username']; ?></td><td style='width: 600px;'><?php echo $row['password']; ?></td></tr>


<?php } ?>
</table> 

<?php  
$query = "select * from food";
$memberr = mysqli_query($con, $query);
if (!$memberr) {
die($query);
}
?>
 <br><br><h1><center><u>FOOD DETAILS:</u></center></h1>
<table id="food" cellpadding="0" cellspacing="0" border="0">
  <tr>
    <th>food_id</th><th>food_name</th>
      <th>calories</th>

  </tr>
<?php while($row = mysqli_fetch_array($memberr)) { ?>
  <tr>
    <td style='width: 200px;'><?php echo $row['food_id']; ?></td><td style='width: 600px;'><?php echo $row['food_name']; ?></td><td style='width: 600px;'><?php echo $row['calories']; ?></td></tr>

<?php } ?>  
</table>


<?php  
$query = "select * from exercise";
$memberr = mysqli_query($con, $query);
if (!$memberr) {
die($query);
}
?>
 <br><br><h1> <center><u> EXERCISE DETAILS:</u></center> </h1>
<table id="exercise" cellpadding="0" cellspacing="0" border="0">
  <tr>
    <th>Exercise Id</th><th>Exercise Name</th>
    <th>Exercise Video</th> <th>Calories</th>

  </tr>
<?php while($row = mysqli_fetch_array($memberr)) { ?>
  <tr>
    <td style='width: 200px;'><?php echo $row['exercise_id']; ?></td><td style='width: 200px;'><?php echo $row['exercise_name']; ?></td><td style='width: 200px;'><?php echo $row['exercise_video']; ?></td><td style='width: 200px;'><?php echo $row['calories_burned']; ?></td></tr>

<?php } ?>

</table>

<?php  
$query = "select * from review";
$memberr = mysqli_query($con, $query);
if (!$memberr) {
die($query);
}
?>
 <br><br><h1><center> <u>REVIEW DETAILS:</u> </center></h1>
<table id="review" cellpadding="0" cellspacing="0" border="0">
  <tr>
    <th>Id</th><th>Review</th>
      <th>Rating</th><th>Name</th>
      <th>Email</th><th>Date Added</th>

  </tr>
<?php while($row = mysqli_fetch_array($memberr)) { ?>
  <tr>
    <td style='width: 50px;'><?php echo $row['review_id']; ?></td><td style='width: 200px;'><?php echo $row['comments']; ?></td><td style='width: 200px;'><?php echo $row['rating']; ?></td>
 <td style='width: 200px;'><?php echo $row['name']; ?></td><td style='width: 200px;'><?php echo $row['email']; ?></td><td style='width: 200px;'><?php echo $row['dateadded']; ?></td>
</tr>

<?php } ?>  
</table>


</div>
</body>
</html>