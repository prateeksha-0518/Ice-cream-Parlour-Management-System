<?php
include("config.php");
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
<title>About Us</title>
<link rel="icon" href="./images/icon.ico">
<link href='./CSS/about1.css' rel='stylesheet' type='text/css'></link>
</head>
<body>
<div id="container">
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
	
		<div id="content">
		<h2 style="font-weight: bold;font-size: 70;text-align: center;color: #C66707;position: relative;top:100px;">About Us</h2>
		<div id="begining" style="overflow: hidden;height: 350px;">
			<h2 style="font-family: courier;font-size: 40;text-align: left;color: #FDFD04;position: relative;top:40px;">Our humble begining</h2>
			<img src="./images/begining.jpg" alt="Store" style="width:500px;height:300px; position: relative;left:900px;padding-top: 2px;float:left">
			<div id="beg_content" style="width:60%;height: 50px">
				<p1 style="font-style:italic;font-size: 30;text-align: left;position:relative;color: #FFF;float: right;top:-300px;">Nearly three-quarters of a century ago, two brothers-in-law shared a dream to create an innovative ice cream store that would be a neighborhood gathering place for families. Tim Burton and Irvine Douglas had a mutual love of old-fashioned ice cream and the desire to provide customers a variety of flavors made with ingredients of the highest quality in a fun, inviting atmosphere.</p1>
			</div>
		</div>
		<div id="history" style="overflow: auto;height: 1200px">
			<h2 style="font-family: courier;font-size: 40;text-align: left;color: #FDFD04;position:relative;top:-10px;">How it was born?</h2>
			<img src="./images/history.jpg" alt="First Store" style="width:500px;height:350px; position: relative;left:0px;top:10px;padding-top: 2px;float:left;">
			<div id="history_content" style="width:40% height:200px">
				<p1 style="font-style:italic;font-size: 30;text-align: left;position:relative;color: #FFF;float: left;top:-0px;right:-65px;height:100px;width: 60%;">As a teen, Tim worked in his father's ice cream store. During World War II, Doug was a Lieutenant in the U.S. Navy and produced ice cream for his fellow troops. When the war was over, the two entrepreneurs were eager to capitalize on America's love of ice cream.They started out in separate ventures at the advice of Tim's father. In 1945, Tim opened Snowbird Ice Cream in Glendale, California. His store featured 21 flavors and emphasized high-quality ice cream sold in a fun, personalized atmosphere. A year later, Doug opened Burton's Ice Cream Shop in Pasadena, CA. By 1948, they had six stores between them. This concept eventually grew into Tim & Doug's Icecreams.
				</p1>
				<p2 style="font-style:italic;font-size: 30;text-align: left;position:relative;color: #FFF;float: right;top:100px;height:600px">
				As the number of stores grew, Tim and Doug recognized that to maintain the high standards they set in the beginning, each store would require a manager who had an ownership interest in its overall operation. Even though they didn't realize it at the time, the two founders had pioneered the concept of franchising in the ice cream industry.In 1949, there were more than 40 stores in Southern California when Tim and Doug purchased their first dairy in Burbank. This business decision allowed them to have complete control over the production of their ice cream, and the development of new ingredients and flavors.
				It wasn't until 1953 that the ice cream chain dropped the separate identities of Snowbird and Burton's and became Tim & Doug's Icecreams.In 1954, they put their product on the line against their competitors at the Los Angeles County Fair. That year they won their first Gold Medal and set the pattern for county and state fair participation, earning Gold Medals for Tim & Doug's Ice Cream every year since that first contest.<br>
				The franchise model created by Tim and Doug decades ago is still used by Tim & Doug's today. Since 1945, we've introduced more than 1,000 unique, fun and delicious ice cream flavors. Still, we continue to consistently introduce new, exciting flavor combinations, as well as ice cream industry-leading innovations such as hand-packed ice cream quarts, a unique flavor ribbon technique, the use of traditional dessert ingredients and the introduction of mousse-textured ice creams.<br>
				
				"Not everyone likes all our flavors, but each flavor is someone's favorite."
   																			-Tim Burton
   				
				</p2>
			</div>
		</div>
		<div id="praise" style="overflow: auto;height: 1200px">
			<h2 style="font-family: courier;font-size: 40;text-align: left;color: #FDFD04;position:relative;top:-10px;">Taste of success!!</h2>
			<img src="./images/praise.jpg" alt="Praise" style="width:500px;height:300px; position: relative;left:0px;top:10px;padding-top: 2px;float:left;">
			<div id="praise_content" style="width:40% height:200px">
				<p1 style="font-style:italic;font-size: 30;text-align: left;position:relative;color: #FFF;float: left;top:-0px;right:-65px;height:100px;width: 60%">There are many forms of enjoyment in life: there's spontaneous pleasure, anticipated pleasure, there is long-term happiness and there are spur-of-the-moment joys. For people everywhere, ice cream has probably generated each of those types of pleasure.
				Baskin-Robbins has long been dedicated to making the experiences of eating ice cream an enjoyable one. “America’s Favorite Neighborhood Ice Cream Shop" is a philosophy at Baskin-Robbins shared by everyone.
				</p1>
				<p2 style="font-style:italic;font-size: 30;text-align: left;position:relative;color: #FFF;float: right;top:50px;height:600px">
				 Each employee, store owner and corporate team member is proud of our heritage, and they are dedicated to upholding the flavor, the fun, and the local, neighborhood feel that make the experience unique to Tim & Doug's. There is nothing quite as thrilling as the face of a child enjoying his favorite ice cream flavor, or the delight of a mother surprised with an ice cream cake on Mother's Day in a store you call “my Tim & Doug's”.
				 From the ages of one to ninety-nine, people visit Tim & Doug's anticipating the pleasure of enjoying their favorite ice creams served any way they want. Because of our dedication to being "America's Favorite Neighborhood Ice Cream Shop", Tim & Doug's icecream stores are visited by over 300 million happy customers year after year. A number that continues to grow as Tim & Doug's spreads throughout the world.<br>
				<h3 style="color:#FDFD04;font-style: normal;">"In the moments of greatest pride, Tim & Doug's is composed of those who contribute in a special way to our fellow humans-helping to nourish that quality of childlike enjoyment, which is perhaps the most precious and hopeful part of our humanity."
													<br> -Warren H. Schmidt, Associate Dean of the Graduate School of Business at the University of California, Los Angeles.</h3>
   				
				</p2>
			</div>
		</div>
	</div>

</div>
<div id="footer">

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


