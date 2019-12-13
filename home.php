<?php
  $con=myConnection();
  if(isset($_POST['mail'])){
  $ml=$_POST['email'];
 if(!empty($ml)){
  $dt=date('Y-m-d');
  $sql="Insert into mailing values('$ml','$dt')";
  if(!filter_var($ml,FILTER_VALIDATE_EMAIL)){
  	myAlert("Enter a valid mail id.");
  }
  else{
  	if(mysqli_query($con,$sql)){
    	myAlert("Thank you for subscribing");
  	}
  	else{
    	myAlert("Sorry It could not be done.");
  	}
	}}
	else{
  		myAlert("Enter your mail.");
	}
}
?>
<html>
<head>
<title>Home</title>
<link rel="icon" href="./images/icon.ico">
<link href='./CSS/home.css' rel='stylesheet' type='text/css'></link>
</head>
<body>
<div id="container" style="height: 1800px" >
	<header>
		<div id='nav'>
			<img src="images/logo.jpg" alt="Company's Logo" style="width:100px;height:95px; position: relative; left:-1300px;padding-top: 2px">
			<h1 style="font-style: italic;font-size:30;position: relative;top:-80px;left:200px">Tim & Doug's Icecreams</h1>
			<a href='./home.php'>Home</a>
			<a href='./manage_ingredients.php'>Employee</a>
			<a href='./menu.php'>Menu</a>
			<a href='./order.php'>Order</a>
			<a href='./feedback.php'>Feedback</a>
			<a href='./about.php'>About Us</a>
		</div>
	</header>
	<div id="banner">
		<video muted="muted" ; autoplay="autoplay"; loop="loop">
                <source src="videos/icecream.mp4" type="video/mp4">
                <source src="videos/icecream.webm" type="video/webm">
                <source src="videos/icecream.ogv" type="video/ogg">
        </video> 
	</div>
	<h1 style="position: relative;text-align: center;font-size: 50;font-family: Impact;color:#FF7C00">Welcome to the world of ice-creams!!</h1>
	<div id="offers" style="position: relative;top:100px;overflow: hidden">
		<img src="./images/poster.jpg" style="height: 100%;width: 100%">
	</div>
</div>
<div id="reviews" style="height:500px;width:1300px;background-color: white;position: relative;top:-100px;left: 70px;overflow: hidden">
	<img src="./images/cust_rev.png" style="height:150px;width:150px;position:relative;left:-500px">
	<div style="position: relative;top:-50px;height: 200px">
	<marquee direction="up">
	<?php
		$s=0;
		$con=myConnection();
		$sql="SELECT * from comments";
		$qr=mysqli_query($con,$sql);
		$tn=mysqli_affected_rows($con);
		while($r=mysqli_fetch_row($qr)){
			echo "<h1 style='color:black;position:relative;left:270px'>'".strtoupper($r[1])."'</h1>";
			$s+=$r[2];
		}
	?>
	</marquee>
</div>
</div>
<div style="position: relative;top:-400px;left:1000px;background-color: white;width: 300px">
	<h1 style="color: black">USER RATINGS</h1>
	<?php
		$avg=floor($s/$tn);
		echo "<img src='./images/rating/$avg.jpg' style='height:100px;width:150px;position:relative;left:0px'>";
	?>
	</div>
<div id="footer" style="position: relative;top:-00px">

	<div id="menu">
		<a href='./home.php'>Home</a><br>
		<a href='./employee.php'>Employee</a><br>
		<a href='./menu.php'>Menu</a><br>
		<a href='./order.php'>Order Online</a><br>
		<a href='./feedback.php'>Feedback</a><br>
		<a href='./about.php'>About Us</a><br>
		<h3 style="font-style: italic;font-size:20;">Subscribe to mailing list:</h3>
		<form method="post">
			<img src="images/email.jpg" alt="Submit" style="height:40px;margin:10px;position: relative;top:-20px"><input type="text" name="email" style="width:200px;height:30px;box-sizing: border-box;border:2px solid black;position: relative;top:-45px">
			<input type="submit" name="mail" value="" style="background-image: url('./images/submit.jpg');background-size:100% 100%;height: 40px;width: 130px;position: relative;top:-30px;">
			</form>
	</div>
	<div id="contact">
		<h4 style="font-size: 25;color: black;position: relative;top:-30px;font-style: italic;">Contact Us:</h4>
		<h2 style="color:black">Tim & Doug's Ice Cream Shop, 54 Coventry St, Newport, VT 05855, USA<br>
		Email: tim_doug@gmail.com;<br>
		Phone: 9802342231 (10:00 am - 09:00 pm)</h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d90381.16711023588!2d-72.27774578323462!3d44.9353025954568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x4cb67195d26c7ee7%3A0xf81323e4ab0a3ea1!2stim+and+doug&#39;s+ice+cream+shop!3m2!1d44.935324!2d-72.207706!5e0!3m2!1sen!2sin!4v1502522505511" width="450" height="150" frameborder="0" style="border:2px solid black;position: relative;top:-70px" allowfullscreen></iframe>
	</div>
	<div id="social">
		<h3 style="font-style: italic;font-size:30;position: relative;text-align: left;top:-25;left:150px">The Social Club</h3>
		<a href="https://www.facebook.com/Tim-Dougs-Ice-Cream-201191819924102/"><img src="./images/facebook.jpg" alt="facebookLogo" style="height:60px;width:60px;position:relative;top:-40px;left:110px"></a>
		<a href="https://twitter.com/search?q=tim%20doug%27s%20icecream&src=typd"><img src="./images/twitter.jpg" alt="twitterLogo" style="height:60px;width:60px;position:relative;top:-40px;left:110px"></a>
		<a href="https://www.instagram.com/explore/locations/244468838/tim-dougs-ice-cream/"><img src="./images/instagram.jpg" alt="instagramLogo" style="height:60px;width:60px;position:relative;top:-40px;left:110px"></a>
		<a href="https://www.youtube.com/watch?v=X1Sta6YSBkc"><img src="./images/youtube.jpg" alt="youtubeLogo" style="height:60px;width:60px;position:relative;top:-40px;left:110px"></a>
	</div>
	<div id="quality">
		<h5 style="font-style: italic;font-size:20;position: relative;text-align: left;top:-50;left:0px">Quality First!</h5>
		<img src="./images/qt1.jpg"  style="height:100px;width:100px;position:relative;top:-65px;left:0px">
		<img src="./images/qt2.jpg"  style="height:100px;width:100px;position:relative;top:-65px;left:0px">
		<img src="./images/qt3.jpg"  style="height:100px;width:100px;position:relative;top:-65px;left:0px">
		<img src="./images/qt4.jpg"  style="height:100px;width:100px;position:relative;top:-65px;left:0px">
	</div>
</div>
</body>
</html>

<?php 
function myAlert($msg){
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

function myConnection(){
  $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = 'dbms';
      $db='parlour';
      $con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
      if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      mysqli_select_db($con,'parlour');
  return $con;
}
?>