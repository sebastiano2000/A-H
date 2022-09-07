<!DOCTYPE html>
<html>

<head>
	<title>home shopping</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="home,shopping">
	<meta name="description" content="home shopping">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/home shopping.css?v=<?php echo time(); ?>" />
	<link rel="icon" href="img-vid/logo1.jpg" type="image/icon type"/>
	<script>
		var counter1 = 1;
		var counter2 = 1;

		function slideShow() {
			if(counter1 == 3){
				counter1 = 1;
				counter2 = 1;
			}
			else{
				counter1++;
				counter2++;
			}

			document.getElementById("slideFormal").src = "img-vid/formal" + counter1 +".jpg";
			document.getElementById("slideCasual").src = "img-vid/casua" + counter1 +".jpg";
		}

		setInterval(slideShow, 2000);

	</script>
</head>

<body>
	<nav>
		<img src="img-vid/logo1.jpg" alt="" width="8%">
		<ul>
			<li><a href="home main.php"> Home </a></li>
			<li><a href="about.php"> About us </a></li>
			<li><a href="contact us.php"> Contact us </a></li>
		</ul>
			<button class="loginIn"><a href="log in.php">Login in</a></button>
			<button class="signUp"><a href="registration.php">Sign Up</a></button>
	</nav>

	<div align="center">
		<div id="ndrow">
			<div class="gallery">
    		<img src="img-vid/formal1.jpg"  width="600" height="400" id="slideFormal">
					<div class="words">
  					<p>The iconic man of today needs to maintain his elegant look through the right formal wear.
  					Concrete formal line is made for you to stand out of the crowd.</p>
						<br>
						<button onclick="window.location.href='classic.php'">Shop</button>
					</div>
			</div>

			<div class="gallery">
		    <img src="img-vid/casua1.jpg"  width="600" height="400" id="slideCasual">
					<div class="words">
		   			<p>Looking vibrant, feeling comfortable.
		   			but yet making a fashion statement is all about Concrete Casual Collection.</p>
					  <br>
						<br>
		 				<button onclick="window.location.href='casual.php'">Shop</button>
					</div>
			</div>
		</div>
	</div>

<div id="footer">© A&S copyrites are reserved</div>

</body>

</html>
