<!DOCTYPE html>
<html>
<head>
<title>LovelyMart</title>
<link rel="stylesheet" type="text/css" href="lovelymart.css" />
<link rel="stylesheet" type="text/css" href="lovelymartproduct.css" />
<link rel="stylesheet" type="text/css" href="lovelymartmobile.css" />
<link rel="stylesheet" type="text/css" href="addtocart.css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>
<body onload="loading();">

<script>
	function loading()
	{
		getcart();		
	}
	function getcart()
		{
			
			var name=localStorage.getItem("Addname1");
			var price=localStorage.getItem("Addprice1");
			var image=localStorage.getItem("Addimage1");
			var quantity=localStorage.getItem("Addquantity1");
			var total=localStorage.getItem("Addtotal1");
				if(name==="" || price==="" || image==="")
				{
					document.getElementById('alertcart').innerHTML='Your Cart is Empty';
					document.getElementById('datalist').style.display='none';
				}
				else
				{
					document.getElementById('Name').innerHTML = name;
					document.getElementById('Price').innerHTML = price;
					document.images.pic.src = image;
					document.getElementById('Quantity').innerHTML = quantity;
					document.getElementById('Total').innerHTML = total;
					
				}
				
		}
	function removecart()
		{
			var Remove_name="";
			localStorage.setItem("Addname1", Remove_name); // save the item
			var Remove_price="";
			localStorage.setItem("Addprice1",Remove_price);
			var Remove_image="";
			localStorage.setItem("Addimage1",Remove_image);
			var Remove_quantity="";
			localStorage.setItem("Addquantity1",Remove_quantity);
			var Remove_total="";
			localStorage.setItem("Addtotal1",Remove_total);
		}
</script>
<?php include 'headershere.php';?>
<?php include 'menus.php';?>
	<div class="cartoptions">
		<h1 id="alertcart" title="Add your any favorite product in the cart for purchasing it">Your Cart</h1>
		<div id="datalist">
				<span id="closecart" title="Remove from Cart" onclick="document.getElementById('datalist').style.display='none';alert('Cart empty');document.getElementById('alertcart').innerHTML='Your Cart is Empty';removecart();">Close &times;</span>
			<div class="cartsdata">
				<div id="Image">
				<img src="" id="pic">
				</div>
				<table style="width:50%;border:1px solid black;background-color:lightgrey;">
			<tr>
			<th>ITEM NAME </th>
			<th>ITEM PRICE</th>
			<th>QUANTITY</th>
			<th>TOTAL PRICE</th>
			</tr>
			<tr>
				<td>
				<span id="Name"></span>
				</td>
				<td><span>Rs.</span><span id="Price"></span></td>
				<td><span id="Quantity"></span></td>
				<td><span>Rs.</span><span id="Total"></span></td>
			</tr>
			</table>
				<div class="payremove">
					<h1>
						<a class="payfromcart" href="lovely_payment.php">
							<button id="adddtocart" type="button" onclick="save();">Pay Money</button>
						</a>
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
function save(){
var Addname=document.getElementById('Name').innerHTML;
localStorage.setItem("Addname3", Addname); // save the item
var Addprice=document.getElementById('Price').innerHTML;
localStorage.setItem("Addprice3",Addprice);
var Addimage=document.getElementById('pic').src;
localStorage.setItem("Addimage3",Addimage);
var Addquantity=document.getElementById('Quantity').innerHTML;
localStorage.setItem("Addquantity3",Addquantity);
var Addtotal=document.getElementById('Total').innerHTML;
localStorage.setItem("Addtotal3",Addtotal);
}
</script>

<div class="footer">
	Copyright &copy; Lovelymart
</div>
</body>
</html>