<?php 
include_once 'config/Database.php';
include_once 'class/User.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);
if($user->loggedIn()) {	
	header("Location: attendance_report.php");	
}

$loginMessage = '';
if(!empty($_POST["login"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {	
	$user->email = $_POST["email"];
	$user->password = $_POST["password"];	
	if($user->login()) {		
		header("Location: attendance_report.php");		
	} else {
		$loginMessage = 'Invalid Input!!, Please try again.';
	}} else {
	$loginMessage = ' Welcome to the Student Monitoring System!!! ';}
include('cfh/header.php');
?>

<title>Student Monitoring System</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="css/dash.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/search.js"></script>
<?php include('cfh/container.php');?>

	<div class="all">
		<div class="row home-sections">		
		<?php include('Login.php'); ?>	
	</div>
	
	<div class="alert">
		<?php if ($loginMessage != '') { ?>
		<div id="login-alert" class="alert alert-danger col-sm-12">
			<?php echo $loginMessage; ?>
		</div>                            
			<?php } ?>
	</div>

<section class="home">
	<div class="col-md-6">                    
		<div class="panel panel-info">
			
			<div class="panel-heading">
				<div class="panel-title"> Login </div>                        
			</div> 
			<div class="panel-body" >
				
				<form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
					<div style="margin-bottom: 25px;" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" class="form-control" id="email" name="email" value="<?php if(!empty($_POST["email"])) { echo $_POST["email"]; } ?>" placeholder="Email" style="background:white;" required>                                        
					</div>                                
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" class="form-control" id="password" name="password" value="<?php if(!empty($_POST["password"])) { echo $_POST["password"]; } ?>" placeholder="Password" required>
					</div>					
					<div class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="login" value="Login" class="btn btn-info">						  
						</div>						
					</div>				
				</form>   
			</div>                     
		</div>  
	</div> 
</div>	
</div>
</section>