<html>
	<head>
		<title> PUBLIC DETAILS </title>
		<style>
			body{
				border:2px solid black;
				margin-left:25%;
				margin-right:25%;
				font-weight:bold;
			}
			div{
				margin-left:10%;
			}
			.topbar{
				margin-left:0%;
				background-color:#000080;
				color:#FFFFFF;
			}
			a{
				color:#FFFFFF;
			}
			#update,#clear{
				background-color:#00FFFF;
			}
		</style>
	</head>
	
	<body>
		<form action="" method="post">
			<div class="topbar">
				<br>
				&emsp; People Registration for Online Vaccination Portal 
				<br><br>
			</div>
			<br><br>
			<div>
				<label> First Name: </label>
				<input type="text" name="fname" required> <br><br>
				<label> Last Name: </label>
				<input type="text" name="lname" required> <br><br>
				<label> Address: </label>
				<input type="text" name="address" required> <br><br>
				<label> Mobile No: </label>
				<input type="text" name="phone" required> <br><br>
				<label> Gender: </label>
				<select name="gender">
					<option> </option>
					<option> Male </option>
					<option> Female </option>
				</select> <br><br>
				<label> NIC: </label>
				<input type="text" name="nic" required> <br><br>
				<label> DOB: </label>
				<input type="text" name="dob" required> <br><br>
				<label> First Name: </label>
				<input type="text" name="fname" required> <br><br>
				<label> District: </label>
				<select name="district">
					<option> </option>
					<option> Jaffna </option>
					<option> Vavuniya </option>
					<option> Anuradhapura </option>
				</select> <br><br>
				<label> Name of the MOH: </label>
				<select name="mohname">
					<option> </option>
					<option> Jaffna </option>
					<option> Nallur </option>
				</select> <br><br>
				<label> Username: </label>
				<input type="text" name="username" required> <br><br>
				<label> Password: </label>
				<input type="text" name="password" required> <br><br>
				<label> Re-Password: </label>
				<input type="text" name="re-password" required> <br><br>
			</div>
			<br><br>
			<div>
				<input type="submit" name="update" id="update" value="Update">  &emsp;&emsp;&emsp;&emsp;
				<input type="submit" name="clear" id="clear" value="Clear">  <br><br>
			</div>
			
		</form>
	</body>
</html>