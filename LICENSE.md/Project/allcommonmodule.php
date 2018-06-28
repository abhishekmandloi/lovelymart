<?php
include 'db.php';
if(isset($_POST['addtomycart']))
{
		$myimage=$_POST['myimage'];
		$myprodname=$_POST['myprodname'];
		$myprice=$_POST['myprice'];
		$myquantity=$_POST['myquantity'];
		$mytotalprice=$_POST['mytotalprice'];
		if(isset($_COOKIE['username']))
			$myusername=$_COOKIE['username'];
		else
			$myusername="";

		$query="insert into addtocart(username,prod_name,price,quantity,totalprice,picdest) values ('$myusername','$myprodname','$myprice','$myquantity','$mytotalprice','$myimage')";
		$run=$con->query($query);
		if($run)
		{
			if(isset($_COOKIE['username']))
				header('Location: dashboard.php');
			else
				header('Location: addtocart.php');
		}
		else
			echo "<script>alert('Failed to add to Cart');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>LovelyMart</title>
<link rel="stylesheet" type="text/css" href="lovelymart.css" />
<link rel="stylesheet" type="text/css" href="lovelymartproduct.css" />
<link rel="stylesheet" type="text/css" href="lovelymartmobile.css" />
<link rel="stylesheet" type="text/css" href="addtocart.css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="javaanim.js"></script>
</head>
<body>
<?php include 'headershere.php';?>
	<div class="prod_slide">
			<img src="image1.jpg" class="produ_t" name="slideshow2" >
			<script type="text/javascript">
				var numberImage =1
				function myslide()
				{
					document.images.slideshow2.src=("image"+numberImage+".jpg")
					if(numberImage <2)
					numberImage = numberImage +1
					else
					numberImage =1
					setTimeout("myslide()",4500)
				}
				myslide()
			</script>
			
	</div>
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
  }
  
</script>
<?php include 'menus.php';?>
	<div class="productsdetails">
		
		<div id="id01" class="modal" style="background-color:#f1f1f1">
			<form action="men_cloth.php" method="post">
				<div class="imgcontainer">
					<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Details">&times;</span>
					<img src="img_avatar2.png" alt="IMAGE" name="picture" id="demo_image" class="avatar">
					<input type="text" id="myimage" name="myimage" hidden="">
					<input type="text" id="myprodname" name="myprodname" hidden="">
					<input type="text" id="myprice" name="myprice" hidden="">
					<input type="text" id="myquantity" name="myquantity" hidden="">
					<input type="text" id="mytotalprice" name="mytotalprice" hidden="">
				</div>
				<div class="container" >
				<div class="datas">
					<h1>Object Name >></h1><br />
					<span id="demo_name">Object</span>
					<br />
					<h1>Price >></h1>
					<span id="dollar">Rs.  </span><span id="demo_price">Price</span>
					<br />
					<h1>Quantity</h1>
					<select onclick="demo_totals()" id="quantity">
					<option selected value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="12">11</option>
					<option value="12">12</option>
					</select>
					<br />
					<h1>Total Price >></h1>
					<span id="dollar">Rs.  </span><span id="demo_total">Please select quantity</span>
					<h1>
						<a class="paying" href="lovely_payment.php"><button type="submit" onclick="save2();">PAY MONEY </button></a>
						<a class="add" href=""><button id="adddtocart" name="addtomycart" type="submit" onclick="document.getElementById('id01').style.display='none';save();">Add to Cart</button></a>
						<button id="canceling" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>	
					</h1>
				</div>
				</div>
			</form>
		</div>
<script>
function save(){
var Addname=document.getElementById('demo_name').innerHTML;
localStorage.setItem("Addname1", Addname); // save the item
var Addprice=document.getElementById('demo_price').innerHTML;
localStorage.setItem("Addprice1",Addprice);
var Addimage=document.getElementById('demo_image').src;
localStorage.setItem("Addimage1",Addimage);
var Addquantity=document.getElementById('quantity').value;
localStorage.setItem("Addquantity1",Addquantity);
var Addtotal=document.getElementById('demo_total').innerHTML;
localStorage.setItem("Addtotal1",Addtotal);
//alert("Added to Cart");
}
function save2(){
var Addname=document.getElementById('demo_name').innerHTML;
localStorage.setItem("Addname3", Addname); 
var Addprice=document.getElementById('demo_price').innerHTML;
localStorage.setItem("Addprice3",Addprice);
var Addimage=document.getElementById('demo_image').src;
localStorage.setItem("Addimage3",Addimage);
var Addquantity=document.getElementById('quantity').value;
localStorage.setItem("Addquantity3",Addquantity);
var Addtotal=document.getElementById('demo_total').innerHTML;
localStorage.setItem("Addtotal3",Addtotal);
alert("Redirecting to Page...");
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
	function show_img(data)
	{
		var imageshow = document.getElementById(data);
		var x = document.getElementById(data).src;
		document.images.picture.src=(x);
		document.getElementById("myimage").value=x;
	}
	function show_name(data)
	{
		var nameshow = document.getElementById(data);
		var x = document.getElementById(data).innerHTML;
		document.getElementById("demo_name").innerHTML =x;
		document.getElementById("myprodname").value=x;
	}
	function show_price(datap)
	{
		var priceshow = document.getElementById(datap);
		var x = document.getElementById(datap).innerHTML;
		document.getElementById("demo_price").innerHTML =x;
		document.getElementById("myprice").value=x;
		demo_totals();
	}
	function demo_totals()
	{
		var x = document.getElementById("demo_price").innerHTML;
		var y = document.getElementById("quantity").value;
		document.getElementById("demo_total").innerHTML = x*y;
		document.getElementById("myquantity").value=y;
		document.getElementById("mytotalprice").value=x*y;
	}
</script>