<div class="header">
	<img id="lovelylogo" style="visibility:visible;" src="logo lovely.gif" />
	<marquee direction="left" class="left">LovelyMart-Best Online Shopping E-commerce Website</marquee>
</div>
<div id="main_nav" class="navbar">

	<ul class="navigation">
	<a id="menubuttons"  title="MENU CATEGORIES" onclick="show('menubutton');"><img src="menubutton.jpg"></a>
		<li><a href="home.php" target="_parent">Home</a></li>
		
		
		
		
		<li><a href="Loginmart.php" id="mylog" target="_parent">Login</a>
		<ul>
			<li><a href="registerlm.php" target="_parent">New Registration</a></li>
			<li><a href="forgotpass.php" target="_parent">Forgot Password</a></li>
		</ul>		
		</li>
		
		
		
		
		
		<li><a href="user_reviews.php" target="_parent">User Reviews</a></li>
		
		
		
		
		
		<li><a href="addtocart.php" target="_parent">Add to Cart</a></li>
		
		
		
		
		
		<li><a href="aboutus.php" target="_parent">About Us</a></li>
		
		
		
		
		
		<li><a href="contacts.php" target="_parent">Contact Us</a></li>
		
		
		
	</ul>
	<select id="menucategories" style="display:none;" onchange="location = this.value;">
				<option>CATEGORIES</option>
				<option disabled>[CLOTHES]</option>
				<option value="men_cloth.php">Men Fashion</option>
				<option value="women_cloth.php">Women Fashion</option>
				<option value="kid_cloth.php">Kid Fashion</option>
				<option disabled>[Shoes]</option>
				<option value="men_shoes.php">For Men</option>
				<option value="women_shoes.php">For Women</option>
				<option value="kid_shoes.php">For Kid</option>
				<option disabled>[Electronics]</option>
				<option value="led_tv.php">LED TV</option>
				<option value="laptop.php">Laptop</option>
				<option disabled>[Watches]</option>
				<option value="m_watch.php">For Men</option>
				<option value="w_watch.php">For Women</option>
				<option value="k_watch.php">For Kid</option>	
	</select>
	<select id="mainmenu" name="mainmenu"  onchange="location = this.value;">
	<option value="home.php" href="home.php" selected>HOME</option>
	<option value="Loginmart.php" href="Loginmart.php" disabled>LOGIN | REGISTER</option>
	<option value="Loginmart.php" href="Loginmart.php" >LOGIN</a></option>
	<option value="registerlm.php" href="registerlm.php" >NEW REGISTERATION</option>
	<option value="forgotpass.php" href="forgotpass.php" >FORGOT PASSWORD</option>
	<option value="user_reviews.php" href="user_reviews.php" >USER REVIEWS</option>
	<option value="addtocart.php" href="addtocart.php" >ADD TO CART</option>
	<option value="about.php" href="about.php" >ABOUT US</option>
	<option value="contacts.php" href="contacts.php" >CONTACT US</option>
	</select>

</div>																																																		
<div class="products" >
<script>
  function show(data)
  {
     var display = document.getElementById(data);
	 if(display.style.display === 'none')
	 {
		display.style.display = 'block';
	 }
	 else
	 {
	 display.style.display = 'none';
	 }
	 hide('main');
  }
  function hide(data)
  {
     var display = document.getElementById(data);
	 if(display.style.display === 'block')
	 {
		display.style.display = 'none';
	 }
	 else if(display.style.display === 'none')
	 {
		display.style.display = 'block';
	 }
	 else
	 {
	 display.style.display = 'none';
	 }
  }
  
</script>

<?php 
if(isset($_COOKIE['login']))
{
	echo "<script>document.getElementById('mylog').innerHTML='Dashboard';</script>";
}
?>
