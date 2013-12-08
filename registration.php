<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="reg-style.css">

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>

</head>
<body>


<div>
	<form id='registration-form' method="post" action='registration.php'>
		<table><tr>
		<td><label>Firstname:</label></td>
		<td><input class='inputtext' type='text' name='firstname' placeholder='Firstname' /></td></tr>
		<tr><td><label>Lastname:</label></td>
		<td><input  class='inputtext' type='text' name='lastname' placeholder='Lastname'/></td></tr>

		<tr><td><label>Username:</label></td>
		<td><input  class='inputtext' type='text' name='username' placeholder='Username' /></td></tr>
	    <tr><td><label>Password:</label></td>
		<td><input class='inputtext'  type='password' name='password' placeholder='Password' /></td></tr>
		<tr><td><label>Confirm Password:</label></td>
		<td><input class='inputtext'  type='password' name='password-confirmation' placeholder='Confirm Password' /></td></tr>
		<tr><td><label>E-mail:</label></td>
		<td><input class='inputtext'  type='text' name='email' placeholder='E-mail' /></td></tr>
		<tr><td><label>Date Of Birth:</label></td>
		<td><input class='inputtext' id='date-field' type='date' name='day-of-bearth'  /></td></tr>
		<tr><td><label>Gender:</label></td>
		<td><select name='gender' id='gender-field' class='inputtext'>
			<option  value='none' slected='1' >None</option>
			<option  value='M'  >Male</option>
			<option  value='F'  >Female</option>
		</select>
			<td></tr>
		<tr><td colspan='2' align='center'><input type='submit'  name='submit' id='registration-button' value='Register' /></td></tr>


</table>

	</form>
</div>



</body>
</html>
