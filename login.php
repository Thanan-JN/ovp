<html>
	<head>
		<title> LOGIN </title>
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
			#login{
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
				<label> Username: </label>
				<input type="text" name="username" required> <br><br>
				<label> Password: </label>
				<input type="text" name="password" required> <br><br>
				<a href="" id="reset"> Reset password </a>
			</div>
			<br><br>
			<div>
				&emsp;&emsp;&emsp;&emsp;
				<input type="submit" name="login" id="login" value="LOGIN">  <br><br>
			</div>
			
		</form>
	</body>
</html>