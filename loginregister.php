<!DOCTYPE html>
<html>
<head>
	<title>LOG IN/ REGISTER</title>
	<link rel="stylesheet" type="text/css" href="loginregister.css">
</head>
<body>
	<div class="navbar">
		<div class="logo">
				<img src="pictures/p16.jpeg" alt="">
		</div>
		<h2> CLASSIC THREADS BOUTIQUE</h2>
		<nav>
		<h5>
		    <a href="homepage3.html">HOME</a> 
		    <a href="#">PROFILE</a>
		    <a href="#">CART</a>
		</h5>
		</nav>
	</div>

	<div class="container">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button"class="actionbtn" onclick="login()">Log In</button>
				<button type="button"class="actionbtn" onclick="register()">Register</button>
			</div>

			<div class="icons">
			<img src="pictures/icon4.png">
			<img src="pictures/icon1.png">
			<img src="pictures/icon2.jpg">
			<img src="pictures/icon3.png">
			</div>

			<form action="loginregister.php"  id="login" class="inputgroup">
				<input type="text" class="inputfield" placeholder="Username" name="Username"   required>
				<input type="Password" class="inputfield" placeholder="Enter Password" name="Password" required >
				<input type="checkbox" class="check-box"><span>Remember Password</span>
				<button type="submit" class="submitbtn">Log In</button>
			</form>

			<form id="register" class="inputgroup">
				<input type="text" class="inputfield" placeholder="Full name" name="Full name" required>
				<input type="text" class="inputfield" placeholder="Username" name="Username" required>
				<input type="text" class="inputfield" placeholder="E-mail Address" name="email" required>
				<input type="Password" class="inputfield" placeholder="Enter Password" name="Password" required>
				<input type="checkbox" class="check-box"><span>I agree to the terms and conditions.</span>
				<button type="submit" class="submitbtn">Register</button>
			</form>


		</div>

		<script>
			var x =document.getElementById('login');
			var y =document.getElementById('register');
			var z =document.getElementById('btn');

			function register(){
				x.style.left="-400px";
				y.style.left="50px";
				z.style.left="110px";
			}
			function login(){
				x.style.left="50px";
				y.style.left="450px";
				z.style.left="0px";
			}

		</script>

		<footer class="footer">
		<div class="container2">
		
		<div>	
		<h5>LINKS
		<ul>
			<li><a href="#">Blogs</a></li>
			<li><a href="#">Website</a></li>
			<li><a href="#">Orders</a></li>
			<li><a href="http://localhost/E-commerce%20clothes/loginregister.php">Log in/Sign in</a></li>
		</ul></h5>
	    </div>

	    <div>
		<h5>CUSTOMER SERVICE
		<ul>
			<li><a href="#">Terms & Conditions</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">FAQ'S</a></li>
			<li><a href="#">Delivery</a></li>
		</ul></h5>
	    </div>

	    <div>
		<h5>CATEGORIES
		<ul>
			<li><a href="#">New Arrivals</a></li>
			<li><a href="#">Men</a></li>
			<li><a href="#">Women</a></li>
			<li><a href="#">Kids</a></li>
			<li><a href="#">Offers</a></li>
		</ul></h5>
	    </div>
	    <div>
		<h5>FOLLOW US ON
		<ul>
			<li><a href="#"><img src="pictures/icon1.png"></a></li>
			<li><a href="#"><img src="pictures/icon2.jpg"></a></li>
			<li><a href="#"><img src="pictures/icon3.png"></a></li>
			<li><a href="#"><img src="pictures/icon5.png"></a></li>
		</ul></h5>
	        </div>
	             </div>
	       
	     </footer>
	</div>
	<div class="images-right">
		<img class="p1" src="pictures/p18.jpg">
		<img class="p2" src="pictures/p26.jpg">
	</div>
	<div class="images-left">	
		<img class="p3" src="pictures/p29.jpg">
		<img class="p4" src="pictures/p28.jpg">
	</div>
</body>
</html>