

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/general.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	#login_form{
		width:350px;
		height:350px;
		position:relative;
		top:50px;
		margin: auto;
		padding: auto;
	}
</style>
</head>

<body>
    
<div class="container">
    
	<div id="login_form" class="well">
		<h2><center>Login</center></h2>
		<hr>
		<form method="POST" action="login.php">
		    Username: <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
		    <div style="height: 10px;"></div>
		    Password: <input type="password" name="password" class="form-control" placeholder="Enter Password" required> 
		    <div style="height: 20px; padding-left: 50px"></div>
		    <button type="submit" class="btn btn-primary"></span> Login </button>  <a href="../attendance_report.php"> <span class="glyphicon glyphicon-log-in"></span>  Back</a>
		</form>

		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				session_start();
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
		</div>
	</div>
</div>
</body>
</html>