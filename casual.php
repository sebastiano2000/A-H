<!DOCTYPE html>
<html>

<head>
	<title>Casual wear</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="Casual,wear">
	<meta name="description" content="Casual wear">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/casual.css?v=<?php echo time(); ?>" />
	<link rel="icon" href="img-vid/logo1.jpg" type="image/icon type"/>
	<script>
		function Read(number){
			var dots = document.getElementById("dots" + number);
			var moreText = document.getElementById("more" + number);
			var btnText = document.getElementById("myBtn" + number);

			if (moreText.style.display == "inline") {
				dots.style.display = "inline";
				btnText.innerHTML = "Read more";
				moreText.style.display = "none";
			} else {
				dots.style.display = "inline";
				btnText.innerHTML = "Read less";
				moreText.style.display = "inline";
			}
		}

		function openMenu(){
			var closed = document.getElementsByClassName("deactive")[0];
			
			if(!closed.classList.contains("show")){
				closed.classList.add("show");
			}
			else {
				closed.classList.remove("show");
			}
		}
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
		<div class="vertical-menu" onclick="openMenu()">
			<label class="active"> Casual </label>
			<label class="deactive"><a href="classic.php"> Classic </a></label>
		</div>
	</nav>

	<div id="ndrow">
		<div class="gallery">
  		<img src="img-vid/casual1.jpg"  width="600" height="400">
				<div class="words">
  				<p>Business casual is a common form of dress worn in many
						<span id="more1">  offices. While many classic business staples are used in business casual wear,
							there are casual elements included like khakis.
							Business casual is appropriate for many interviews, client meetings and office settings.</span>
						<span id="dots1">
							<button id="myBtn1" onclick="Read(1)">Read more</button>
						</span></p>
							<?php
								include "config.php";
								$casual = array(); 
								
								$casu = "SELECT * FROM casual";
								$result = mysqli_query($con,$casu);
								
								if(!$result){
									die("Error:".mysqli_errno($con));
								}
								else{
									while($row = mysqli_fetch_array($result)){
										$price = $row["price"];
										$casual[] = $price;
									}
								}
								echo "<p class='price'>".$casual[0]."LE.</p>";
							?>
					<br>
					<button>ADD TO CART</button>
					<img src="img-vid/cart.jpg" alt="">
				</div>
		</div>

		<div class="gallery">
	    <img src="img-vid/casual2.jpg"  width="600" height="400">
				<div class="words">
		 			<p>Casual dress for men might include items like T-shirts,
						<span id="more2">  button-down shirts or sweaters on top.
							Bottoms might include jeans, khaki pants or shorts. Casual shoes can include sneakers,
							loafers or sandals.</span>
						<span id="dots2">
							<button id="myBtn2" onclick="Read(2)">Read more</button>
						</span></p>
							<?php
								include "config.php";
								$casual = array(); 
								
								$casu = "SELECT * FROM casual";
								$result = mysqli_query($con,$casu);
								
								if(!$result){
									die("Error:".mysqli_errno($con));
								}
								else{
									while($row = mysqli_fetch_array($result)){
										$price = $row["price"];
										$casual[] = $price;
									}
								}
								echo "<p class='price'>".$casual[1]."LE.</p>";
							?>
					<br>
					<button>ADD TO CART</button>
					<img src="img-vid/cart.jpg" alt="">
				</div>
		</div>
		<div class="gallery">
	    <img src="img-vid/casual3.jpg"  width="600" height="400">
			<div class="words">
				<p>Smart casual for men includes items like sports jackets,
					<span id="more3">  ties, khakis, button-down shirts, polos, dress shoes, boots,
						 clean sneakers and belts.</span>
					<span id="dots3">
						<button id="myBtn3" onclick="Read(3)">Read more</button>
					</span></p>
							<?php
								include "config.php";
								$casual = array(); 
								
								$casu = "SELECT * FROM casual";
								$result = mysqli_query($con,$casu);
								
								if(!$result){
									die("Error:".mysqli_errno($con));
								}
								else{
									while($row = mysqli_fetch_array($result)){
										$price = $row["price"];
										$casual[] = $price;
									}
								}
								echo "<p class='price'>".$casual[2]."LE.</p>";
							?>
				<br>
				<button>ADD TO CART</button>
				<img src="img-vid/cart.jpg" alt="">
			</div>
		</div><div class="gallery">
	    <img src="img-vid/casual4.jpg"  width="600" height="400">
			<div class="words">
				<p>Casual business attire is informal clothing worn not only in
					<span id="more4">  most business settings but also in many settings outside of work.
						 You might wear casual clothing if you work in an informal office where others wear things like T-shirts,
						 jeans and open-toed shoes.</span>
					<span id="dots4">
						<button id="myBtn4" onclick="Read(4)">Read more</button>
					</span></p>
							<?php
								include "config.php";
								$casual = array(); 
								
								$casu = "SELECT * FROM casual";
								$result = mysqli_query($con,$casu);
								
								if(!$result){
									die("Error:".mysqli_errno($con));
								}
								else{
									while($row = mysqli_fetch_array($result)){
										$price = $row["price"];
										$casual[] = $price;
									}
								}
								echo "<p class='price'>".$casual[3]."LE.</p>";
							?>
				<br>
				<button>ADD TO CART</button>
				<img src="img-vid/cart.jpg" alt="">
			</div>
		</div>
	</div>

<div id="footer">© A&S copyrites are reserved</div>
</body>

</html>
