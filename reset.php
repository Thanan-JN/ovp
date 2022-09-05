<html>
	<head>
		<title> RESET </title>
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
			#update,#clear{
				background-color:#00FFFF;
			}
		</style>
	</head>
	
	<body>
		<form action="" method="post">
			<div class="topbar">
				<br>
				&emsp; Vaccination System 
				<br><br>
			</div>
			<br><br>
			<div>
				<label> Old Password: </label>
				<input type="text" name="oldpass" required> <br><br>
				<label> New Password: </label>
				<input type="text" name="newpass" required> <br><br>
			</div>
			<br><br>
			<div>
				<input type="submit" name="update" id="update" value="Update">  &emsp;&emsp;&emsp;&emsp;
				<input type="submit" name="clear" id="clear" value="Clear">  <br><br>
			</div>
			
		</form>
	</body>
</html>