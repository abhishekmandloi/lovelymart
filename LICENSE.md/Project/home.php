<!DOCTYPE html>
<html>
<head>
<title>LovelyMart</title>
<link rel="stylesheet" type="text/css" href="lovelymart.css" />
<link rel="stylesheet" type="text/css" href="lovelymartproduct.css" />
<link rel="stylesheet" type="text/css" href="lovelymartmobile.css" />
<link rel="stylesheet" type="text/css" href="homeparallax.css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="javaanim.js"></script>
</head>
<body>
<a name="top">
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
				myslide();
			</script>
			
	</div>
	<?php include 'menus.php';?>
	<div id="data_css" class="productsdetails">
	<div class="search_bar">
		<input class="search" id="search_data" type="text" placeholder="Search tv,watch,led,shoe,shirt,top,cloth etc..." onkeyup="search(document.getElementById('search_data').value);">
		<input class="search_button" onclick="search(document.getElementById('search_data').value);" type="button" value="PRODUCT SEARCH">
	</div>
	<script>
	function search(data)
	{
		//alert(" searching "+data+" ....");
		var prod_arr=['laptop','tv','led','watch','shoe','shirt','top','cloth'];
		var prod_red=['laptop.php','led_tv.php','led_tv.php','m_watch.php','men_shoes.php','men_cloth.php','women_cloth.php','kid_cloth.php'];
		var i,counter=0;
		for(i=0; i<prod_arr.length; i++)
		{
			if(data==prod_arr[i])
			{
				counter=1;
				location.href=prod_red[i];
			}
		}
		if(counter!=1)
		{
			//alert(data+" not found...");
		}
	}
	</script>
		<div class="websiteinfo">
		The best Website to Buy any Product in Low Range of Money
		</div>
		<div class="clothes1">
		</div>
		<div class="clothes3">
			<div class="title">
			New Offers on buying the clothes at your suitable range.
			</div>
		</div>

		<div class="shoes1">
		</div>

		<div class="shoes3">
			<div class="title">
			Fashion is a language that creates itself in shoes to interpret reality
			</div>
		</div>

		<div class="elec1">
			<div class="title">
			These highly-rated LED TVs all use LED LCD tech, not OLED or something else
			</div>
		</div>

		<div class="elec3">
			<div class="title">
			Laptops in affordable ranges of all company like Apple, HP, Lenovo, Dell
			</div>
		</div>

		<div class="watches1">
		</div>

		<div class="watches3">
			<div class="title">
			Every man needs a good, solid watch.The best watch is the Presidential Rolex.
			</div>
		</div>
	</div>
</div>

<a href="#top" class="topclass">TOP</a>
<div class="footer">
	Copyright &copy; Lovelymart
</div>
</body>
</html>