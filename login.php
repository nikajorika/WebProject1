
<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8"/>
	<title>Login Form</title>

	<link rel="stylesheet" href="login_style.css" type="text/css" media="screen" charset="utf-8" />

	<style>
		/* General Styles */
		
	
		ul#login-widget-freebie { display: table; list-style: none; margin: 0 auto; padding: 0; }
		ul#login-widget-freebie > li { float: left; margin-right: 20px; margin-bottom: 20px; padding: 10px 10px; }
		ul#login-widget-freebie > li:last-child { margin-right: 0; }
		ul#login-widget-freebie > li > span { margin-bottom: 10px; }
	</style>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script type="text/javascript">
	
	</script>
	

</head>
<body style="background-image: url(images/63906.jpg);" >
<script type="text/javascript"> 
$('#login').click(function() {
	if($('.full big button pink').value()==''){

		alert('Sorry Both Fields Are Required!')
	}
	else



}).



</script>
<?php
session_start();
 $connect=mysqli_connect('localhost:3306','root','', 'users'); 
 if(mysqli_connect_errno())
 	{ 
 		echo "failed to connect to mysql database".mysqli_connect_error();
 	}

$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$result=mysqli_query($connect, "select * from users where login='".$username."' and password='".$password."'")or die("Error: ".mysqli_error($connect));;
$count=$result->num_rows;
print($username." ".$password);
if($count==1){
$_session['username']=$username;
print($username);

	header('location:welcome.php');
}
	else {
	echo 'Your username or password is invalid';}

?>

	<ul id="login-widget-freebie">
		<li>
			<div class="login-widget">
				<a href="registration.php" ><button type='button' id="login-widget-switch" class="button green" >Registration</button></a>
				<div id="login-widget-content">
					<form method="post" action="login.php">
						<input type="text" class="icon custom-input" name='username' style="background-image: url(images/username_field.png);" placeholder="Username or E-mail" />
						<input type="password" class="icon custom-input" name='password' style="background-image: url(images/password_field.png);" placeholder="Password" />
						<input type="submit" id='login' class="full big button pink" value="Login" />
					
					</form>
				</div>
			</div>
		</li>
	</ul>
</body>
</html>