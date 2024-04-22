<?php 
include_once 'config/Database.php';
include_once 'class/User.php';
include('cfh/header.php');
?>

<title>Student Monitoring System</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/contacts.css">
<link rel="stylesheet" href="css/dash.css">
<link rel="stylesheet" href="css/top.css">
<script src="js/search.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script> <!--For email-->
<script src="js/send-email.js"></script>

<?php include('cfh/container.php');?>

<div class="all">
	<div class="row home-sections">		
	<?php include('Login.php'); ?>	
	</div>
	
    <div class="top">
		<h5>Contact Us</h5>
	</div>
	
	<section class="contact">
		<form class="" action="send.php" method="post">
			<div class="input-box">
				<div class="input-field field">
					<input type="text" name="name" placeholder="Full Name" id="name" class="item" autocomplete="off">
					<div class="error-txt">Full Name can't be black</div>
				</div>
				<div class="input-field field">
					<input type="text" placeholder="Email Address" name="email" id="email" class="item" autocomplete="off">
					<div class="error-txt">Email Address can't be black</div>
				</div>
			</div>
			<div class="input-box">
				<div class="input-field field">
					<input type="text" placeholder="Phone Number" id="phone" class="item" autocomplete="off">
					<div class="error-txt">Phone Number can't be black</div>
				</div>
				<div class="input-field field">
					<input type="text" placeholder="Subject" name="subject" id="subject" class="item" autocomplete="off">
					<div class="error-txt">Subject can't be black</div>
				</div>
			</div>
			<div class="textarea-field field">
				<textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message Here..." class="item" autocomplete="off"></textarea>
				<div class="error-txt">Message can't be black</div>
			</div>
			<button type="submit" name="send">Send Message</button>
		</form>
	</section>

</div>