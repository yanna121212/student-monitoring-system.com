<?php 
include_once 'config/Database.php';
include_once 'class/User.php';
include('cfh/header.php');
?>

<title>Student Monitoring System</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="css/dash.css">
<link rel="stylesheet" href="css/aboutus.css">
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
                <img src="images/almano.jpg" alt="Image 1">
                <h2>Joanna Mae Almano</h2>
                <p>Information about Card 1</p>
            </div>
            <div class="card">
                <img src="images/.jpg" alt="Image 2">
                <h2>Noriel John Armas</h2>
                <p>Information about Card 2</p>
            </div>
			<div class="card">
                <img src="images/deungria.jpg" alt="Image 2">
                <h2>Eleana Jia De Ungria</h2>
                <p>Information about Card 2</p>
            </div>
			<div class="card">
                <img src="images/gomez.jpg" alt="Image 2">
                <h2>Arzen Dave Gomez</h2>
                <p>Information about Card 2</p>
            </div>
			<div class="card">
                <img src="image2.jpg" alt="Image 2">
                <h2>Elisha Sophia Lopez</h2>
                <p>Information about Card 2</p>
            </div>
			<div class="card">
                <img src="image2.jpg" alt="Image 2">
                <h2>Jalesha Yoane Margarette Manzanero</h2>
                <p>Information about Card 2</p>
            </div>
			<div class="card">
                <img src="images/pereabras.jpg" alt="Image 2">
                <h2>Alliana Jhane Pereabras</h2>
                <p>Information about Card 2</p>
            </div>
			<div class="card">
                <img src="image2.jpg" alt="Image 2">
                <h2>Rome miel Regalado</h2>
                <p>Information about Card 2</p>
            </div>
        </div>
    </div>
  
</div>	
