<html>
	<head>
		<title>Sign In |My stand</title>
		<style>
	
		</style>
	</head>
	<body>
		<form action="Login.php" method="post">
			<table align="center" border="1">
				<tr>
					<td>User Name</td>
					<td><input type="text" maxlength="30" Id="UserName" name="useremail"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" maxlength="16" id="Password" name="userpass"></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Login"></td>
				</tr>
			</table>
		</form>
	
		<form action="Register.php" method="post">
			<table align="center" border="12">
				<tr>
					<td>Name</td>
					<td><input type="text" maxlength="20" id="UserName" name="username"></td>
				</tr>
				<tr>
					<td>Email ID</td>
					<td><input type="text" maxlength="30" id="UserEmail" name="useremail"></td>
				</tr>
				<tr>
					<td>Date Of Birth</td>
					<td><input type="date" id="UserDOB" name="userdob"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" maxlength="16" id="UserPassword" name="userpass"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><input type="radio" value="male" name="usergender" checked>Male
						<input type="radio" value="female" name="usergender" >Female</td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td><input type="number"  name="userphone"></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Register"></td>
				</tr>
			</table>
		</form>
	</body>
</html>

