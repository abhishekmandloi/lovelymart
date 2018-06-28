<?php include 'db.php';?>
<?php
function chk1()
{
            setcookie('username', '');
            setcookie('name', '');
            setcookie("login",'');
            header('Location: Loginmart.php');
}
  if (isset($_POST['logout'])) {
    chk1();
  }
?>
<?php
	if(!isset($_COOKIE['username']))
	{
		header('Location: Loginmart.php');
	}
	if(isset($_POST['profile']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$father=$_POST['father'];
		$mother=$_POST['mother'];
		$gender=$_POST['gender'];
		$mobile=$_POST['mobile'];
		$state=$_POST['state'];
		$username=$_POST['username'];
		$passwords=$_POST['passwords'];
		if($lname!="" && $fname!="")
		{
				$query="update registrations set fname='$fname',lname='$lname',father='$father',mother='$mother',gender='$gender',mobile='$mobile',state='$state',passwords='$passwords' where username like '$username'";
				$run=$con->query($query);
				if($run)
				{
					echo "<script>alert('Updated');</script>";
				}
				else
				{
					echo "<script>alert('Updation Failed');</script>";	
				}
		}

	}	
	if(isset($_POST['reviews']))
	{
		echo "<script>alert('Reviews');</script>";
	}	
	if(isset($_POST['removeproduct']))
	{
		echo "<script>alert('button clicked');</script>";
		$prod_name=$_POST['prod_name'];
		$quantity=$_POST['quantity'];
		$username=$_COOKIE['username'];
		$query="delete from addtocart where username='$username' and prod_name='$prod_name' and quantity='$quantity'";
		$run=$con->query($query);
		header('Location: dashboard.php');
	}	
	if(isset($_POST['orders']))
	{
		echo "<script>alert('Orders');</script>";
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lovely Mart -My Dashboard</title>
	<link rel="stylesheet" type="text/css" href="dashboard.css">
	<script>
            function profileajax()
            {
                var req=new XMLHttpRequest();
                req.onreadystatechange =function(){
                    if(req.readyState ==4 && req.status ==200){
                        document.getElementById('main_frame_data').innerHTML=req.responseText;
                        
                    }
                }
                req.open('GET','profiledetails.php',true);
                req.send();
            }
            function cartajax()
            {
                var req=new XMLHttpRequest();
                req.onreadystatechange =function(){
                    if(req.readyState ==4 && req.status ==200){
                        document.getElementById('main_frame_data').innerHTML=req.responseText;
                        
                    }
                }
                req.open('GET','cartdetails.php',true);
                req.send();
            }
            function reviewajax()
            {
                var req=new XMLHttpRequest();
                req.onreadystatechange =function(){
                    if(req.readyState ==4 && req.status ==200){
                        document.getElementById('main_frame_data').innerHTML=req.responseText;
                        
                    }
                }
                req.open('GET','reviewdetails.php',true);
                req.send();
            }
            function orderajax()
            {
                var req=new XMLHttpRequest();
                req.onreadystatechange =function(){
                    if(req.readyState ==4 && req.status ==200){
                        document.getElementById('main_frame_data').innerHTML=req.responseText;
                        
                    }
                }
                req.open('GET','orderdetails.php',true);
                req.send();
            }
    </script>
    <script>
function save(data1,data2,data3,data4,data5){
    //alert(data1+" "+data2+" "+data3+" "+data4+" "+data5);
var Addname=document.getElementById(data1).innerHTML;
localStorage.setItem("Addname3", Addname); // save the item
var Addprice=document.getElementById(data2).innerHTML;
localStorage.setItem("Addprice3",Addprice);
var Addimage=document.getElementById(data5).src;
localStorage.setItem("Addimage3",Addimage);
var Addquantity=document.getElementById(data3).innerHTML;
localStorage.setItem("Addquantity3",Addquantity);
var Addtotal=document.getElementById(data4).innerHTML;
localStorage.setItem("Addtotal3",Addtotal);
}
</script>
</head>
<body onload="cartajax();">

<div class="topheading">
	<h1>My Dashboard</h1>
</div>
<div class="data">
		<div class="navbars">
			<ul>
				<li>
					<a href="home.php">Home</a>
				</li>
				<form action="dashboard.php" method="post">
				<li onclick="profileajax();">
					<span >Profile</span>
				</li>
				<li onclick="cartajax();">
					<span>My Cart</span>
				</li>
				<li onclick="orderajax();">
					<span>My Orders</span>
				</li>
				<li onclick="reviewajax();">
					<span>My Reviews</span>
				</li>
				<li>
					<a href='Loginmart.php?logout=yes'><button name="logout" id="logout">Logout</button></a>
				</li>
				</form>
			</ul>
		</div>

		<div class="main_frame" id="main_frame_data">
			something here
			
		</div>
</div>
</body>
</html>