<?php 
include_once 'config/Database.php';
include_once 'class/User.php';
include('cfh/header.php');
?>

<title>Student Monitoring System</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="css/dash.css">
<link rel="stylesheet" href="css/contact.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="cards.js"></script>
<?php include('cfh/container.php');?>

<div class="all">
	<div class="row home-sections">		
	<?php include('Login.php'); ?>	
	</div>
	
	<div class="top">
		<h5>About Us</h5>
	</div>

    <div class="container">
    <div class="cards" data-image="image1.jpg">
        <div class="card">
            <i class="glyphicon glyphicon-home"></i>
            <h3>Address</h3>
            <p>STI College Tanay</p>
            <p>Manila East Road 1980 Tanay Rizal</p>
        </div>
        <div class="card">
            <i class="glyphicon glyphicon-envelope"></i>
            <h3>Email</h3>
            <a href="mailTo:pereabrasalliana@gmail.com">pereabrasalliana@gmail.com</a>
            <a href="mailTo:pereabrasalliana@gmail.com">studentmonitoringsystem3@gmail.com</a>
        </div>
        <div class="card">
            <i class="glyphicon glyphicon-earphone"></i>
            <h3>Phone Number</h3>
            <p>+63 9301250657</p>
            <p>+63 9065771741</p>
        </div>
    </div>
</div>

<script>
document.addEvent
ener("DOMContentLoaded", function() {
    const cards = document.querySelector(".cards");
    const image = cards.getAttribute("data-image");
    cards.style.backgroundImage = `url(${image})`;
});
</script>
  
</div>	