<?php include 'db.php';?>
<?php	
	if(isset($_POST['submit']))
	{
		$fname=$_POST['firstname'];
		$lname=$_POST['lastname'];
		$contact=$_POST['co_num'];
		$email=$_POST['email'];
		$feedback=$_POST['feedback'];
		if($email!="" && $fname!="")
		{
			if($contact!="" && $feedback!="")
			{
				$query="insert into contactuspage(fname,lname,contact,email,feedback) values('$fname','$lname','$contact','$email','$feedback')";
				$run=$con->query($query);
				if($run)
				{
					echo "<script>alert('Submited');</script>";
				}
				else
				{
					echo "<script>alert('Submition Failed');</script>";	
				}
			}
		}
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
</head>
<body style="background-image:url('contactimg.jpg');">
<?php include 'headershere.php';?>
<?php include 'menus.php';?>
</div>
<script>
function checkdata()
{
	var uname=document.forms[0].email.value;
	var fname=document.forms[0].firstname.value;
	var lname=document.forms[0].lastname.value;
	var phone=document.forms[0].co_num.value;
	if(uname=="" || fname=="" || lname=="" || phone=="")
	{
		alert('You have to fill the username or password');
		return false;
	}
	else
	{
		return true;
	}
}
</script>	
<div id="cmain">
		<div class="contactforum">
			<center><h1><font color=red>CONTACT US FORM</font></h1>
			<form action="contacts.php" method="post" onsubmit="return checkdata();">
			<fieldset >
				<p>First name<br />
				<input class="text" type="text" name="firstname" required /><br /></p>
				<p>Last name<br />
				<input class="text"  type="text" name="lastname" required /><br /></p>
				<p>Email Id<br />
				<input type="text" class="text" name="email" required /></p>
				<p>Contact Number<br />
				<input class="text"  type="text" name="co_num" size=10 required /></p>
				<p>Your Description about the website<br /> 
				<textarea class="textarea" placeholder="Feedback..." name="feedback" rowspan="8" required/></textarea></p>
				<br />
				<input type="submit" onclick="submit" class="submit" name="submit" value="Submit" />
			</fieldset>
			</form>
			</center>
		</div>
</div>
<div class="footer">
	Copyright &copy; Lovelymart
</div>
</body>
</html>