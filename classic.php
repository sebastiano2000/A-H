<?php
	session_start();
	if(!isset($_SESSION["loggedUser"])){
		header('Location: log in.php');
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Classic wear</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="Classic,wear">
	<meta name="description" content="Classic wear">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/classic.css?v=<?php echo time(); ?>" />
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
			<label class="active"> Classic </label>
			<label class="deactive"><a href="casual.php"> Casual </a></label>
		</div>
	</nav>

	<div id="ndrow">	
			<div class="gallery">
				<?php
					include "config.php";
					$class = array(); 
					$class2 = array(); 
								
					$classic = "SELECT * FROM classic";
					$result = mysqli_query($con,$classic);
								
					if(!$result){
						die("Error:".mysqli_errno($con));
					}
					else{
						while($row = mysqli_fetch_array($result)){
							$price = $row["price"];
							$img = $row["img"];
							$class[] = $price;
							$class2[] = $img; 
						}
					}
					echo "<img src='img-vid/".$class2[0].".jpg'  width='600' height='400'>";
					echo "<div class='words'>";
					echo "<p>For business formal, men might wear clothing similar
							<span id='more1'> to “business professional”—a dark suit and tie.
								For this setting, a black suit is appropriate with a light button-down shirt.
								Wear oxford or loafer shoes with clean lines. Avoid wearing brown shoes if you select a black suit.
								Accessorize with belts, a tie clip or small, minimal cuff links.</span>";
							echo "<span id='dots1'>";
								echo "<button id='myBtn1' onclick='Read(1)'>Read more</button>";
							echo "</span></p>";
							
								echo "<p class='price'>".$class[0]."LE.</p>";
							
					echo "<br>";
					echo "<button>ADD TO CART</button>";
					echo "<img src='img-vid/cart.jpg' alt=''>";
					echo "</div>";
					?>
			</div>

			<div class="gallery">
			<?php
					include "config.php";
					$class = array(); 
					$class2 = array(); 
								
					$classic = "SELECT * FROM classic";
					$result = mysqli_query($con,$classic);
								
					if(!$result){
						die("Error:".mysqli_errno($con));
					}
					else{
						while($row = mysqli_fetch_array($result)){
							$price = $row["price"];
							$img = $row["img"];
							$class[] = $price;
							$class2[] = $img; 
						}
					}
					echo "<img src='img-vid/".$class2[1].".jpg'  width='600' height='400'>";
					echo "<div class='words'>";
					echo "<p>For business casual, men can wear trousers, slacks, khakis,";
					echo "<span id='more2'> button-downs, polos, or sport coats.";
					echo "Jackets and ties are optional but can be used to accessorize.";
					echo "Business casual shoes include loafers, lifestyle sneakers (with leather or canvas), oxfords or boots.</span>";
					echo "<span id='dots2'>";
					echo "<button id='myBtn2' onclick='Read(2)'>Read more</button>";
					echo "</span></p>";
					echo "<p class='price'>".$class[1]."LE.</p>";
					echo "<br>";
					echo "<button>ADD TO CART</button>";
					echo "<img src='img-vid/cart.jpg' alt=''>";
					echo "</div>";
			?>
			</div>
			<div class="gallery">
			<?php
					include "config.php";
					$class = array(); 
					$class2 = array(); 
								
					$classic = "SELECT * FROM classic";
					$result = mysqli_query($con,$classic);
								
					if(!$result){
						die("Error:".mysqli_errno($con));
					}
					else{
						while($row = mysqli_fetch_array($result)){
							$price = $row["price"];
							$img = $row["img"];
							$class[] = $price;
							$class2[] = $img; 
						}
					}
					echo "<img src='img-vid/".$class2[2].".jpg'  width='600' height='400'>";
					echo "<div class='words'>";
					echo "<p>Business professional is a traditional form of attire used in more";
					echo "	<span id='more3'> conservative settings or companies with strict dress codes.";
					echo "		 You might wear business professional in industries like accounting, banking, finance, government or law.";
					echo "		Business professional clothes should be well-fitted and may be tailored to fit you specifically.</span>";
					echo "	<span id='dots3'>";
					echo "		<button id='myBtn3' onclick='Read(3)'>Read more</button>";
					echo "	</span></p>";
					echo "<p class='price'>".$class[2]."LE.</p>";
					echo "<br>";
					echo "<button>ADD TO CART</button>";
					echo "<img src='img-vid/cart.jpg' alt=''>";
					echo "</div>";
				?>
			</div>
			<div class="gallery">
			<?php
					include "config.php";
					$class = array(); 
					$class2 = array(); 
								
					$classic = "SELECT * FROM classic";
					$result = mysqli_query($con,$classic);
								
					if(!$result){
						die("Error:".mysqli_errno($con));
					}
					else{
						while($row = mysqli_fetch_array($result)){
							$price = $row["price"];
							$img = $row["img"];
							$class[] = $price;
							$class2[] = $img; 
						}
					}
					echo "<img src='img-vid/".$class2[3].".jpg'  width='600' height='400'>";
					echo "<div class='words'>";
					echo "<p>Business formal is reserved for the most formal settings";
					echo "<span id='more4'>  such as award ceremonies, special dinners, benefits or other important evening events.";
					echo "Business formal is similar to “black tie,” but should be reserved to maintain professionalism.</span>";
					echo "<span id='dots4'>";
					echo "<button id='myBtn4' onclick='Read(4)'>Read more</button>";
					echo "</span></p>";
					echo "<p class='price'>".$class[3]."LE.</p>";
					echo "<br>";
					echo "<button>ADD TO CART</button>";
					echo "<img src='img-vid/cart.jpg' alt=''>";
					echo "</div>";
				?>
			</div>";
	</div>

<div id="footer">© A&S copyrites are reserved</div>
</body>

</html>
