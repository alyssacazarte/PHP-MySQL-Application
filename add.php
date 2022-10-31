<?php
	if(isset($_POST['Submit'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$user_type = $_POST['user_type'];
		
	
		include_once("config.php");
				

		$result = mysqli_query($conn, "INSERT INTO user(firstname,lastname,email,address,password,confirmpassword,user_type) VALUES('$firstname','$lastname','$email','$address','$password','$confirmpassword','$user_type')");
		

		echo "User added successfully. <a href='crudadmin.php'>View User</a>";
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
<!-- <a href="crudadmin.php">Back To View User</a>
	<br/><br/> -->

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="firstname"></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="lastname"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
			   <td>Address</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr> 
				<td>Confirm Password</td>
				<td><input type="text" name="confirmpassword"></td>
			</tr>
			<tr> 
				<td>User Type</td>
				<td><input type="text" name="user_type"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
    
</body>
</html>