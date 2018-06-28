<?php include 'db.php';?>
<?php 
if(isset($_POST['find']))
{
	$username=$_POST['email'];
	$mobile=$_POST['phoneno'];
	$mother=$_POST['mothername'];
	$query="select * from registrations where username='$username' and mobile='$mobile' and mother='$mother'";
	$run=$con->query($query);
	$flag=0;
	while ($row=$run->fetch_array()) 
	{
		if($row['username']==$username)
		{
			if($row['mother']==$mother)
			{
				if($row['mobile']==$mobile)
				{
					$flag=1;
					$password=$row['passwords'];
					echo "<script>alert('Your password is : $password');</script>";
					break;
				}
			}
		}
	}
	if($flag==0)
	{
		echo "<script>alert('Failed to Find Password');</script>";
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
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
	<?php include 'headershere.php';?>
	<?php include 'menus.php';?>
</div>	
<script>
function checkdata()
{
	var uname=document.forms[0].email.value;
	var phoneno=document.forms[0].phoneno.value;
	var mothername=document.forms[0].mothername.value;
	if(uname=="" || phoneno=="" || mothername=="")
	{
		alert('You have to fill the Textboxes correctly');
		return false;
	}
	else
	{
		return true;
	}
}
</script>
<div id="registers" class="registration" >
	<form action="forgotpass.php" method="post" target="_parent" onsubmit="return checkdata();">
			<fieldset >
			<pre>
			<h1 style="padding:0px 20% 0px 20%; color:blue;">FORGOT PASSWORD</h1>
			
			<br />
			<legend><label><strong>User Name or Email</strong></legend><input type="text" class="ilogin" name="email" required/></label>
			<br />
			<legend><label><strong>Mobile Number</strong></legend><input type="text" name="phoneno" value="" required/></label>
			<br />
			<legend><label><strong>Mother's Name</strong></legend><input type="text" name="mothername" required/></label> 
			<br />
			</pre>
			
			<input type="submit" class="submit" value="FIND PASSWORD" name="find" />
			<br />
			<br />
			
			<a href="Loginmart.php" target="_parent"><input type="button" class="back" onclick="Loginmart.php" value="Back to Login Page" /></a>
			</fieldset>
			</form>
</div>

<div class="footer">
	Copyright &copy; Lovelymart
</div>
</body>
</html>