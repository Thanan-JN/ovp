<html>
	<head>
		<title> PUBLIC PROFILE </title>
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
			#mohs{
				margin-left:60%;
			}
			#add,#clear{
				background-color:#00FFFF;
			}
		</style>
	</head>
	
	<body>
		<form action="" method="post">
			<div class="topbar">
				<br>
				<a href="" > Person Name </a> &emsp;
				<a href="" id="smart"> Smart Vaccination </a> &emsp;
				<a href="" id="annos"> Annoncement </a> &emsp;
				<a href="" id="logout"> Logout </a>
				<br><br>
			</div>
			<br><br>
			<div>
				<label> MOH id: </label>
				<input type="text" name="mohid" required> <br><br>
				<label> Name of the MOH: </label>
				<select name="mohname">
					<option> </option>
					<option> Jaffna </option>
					<option> Nallur </option>
				</select> <br><br>
				<label> First Name: </label>
				<input type="text" name="fname" required> <br><br>
				<label> Last Name: </label>
				<input type="text" name="lname" required> <br><br>
				<label> Address: </label>
				<input type="text" name="address" required> <br><br>
				<label> Mobile No: </label>
				<input type="text" name="phone" required> <br><br>
				<label> Password: </label>
				<input type="text" name="password" required> <br><br>
			</div>
			<br><br>
			<div>
				<input type="submit" name="add" id="add" value="Add">  &emsp;&emsp;&emsp;&emsp;
				<input type="submit" name="clear" id="clear" value="Clear">  <br><br>
			</div>
			
		</form>
	</body>
</html>