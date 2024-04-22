<link rel="stylesheet" href="css/top.css" />
<script src="js/prof.js"></script>

<section class="main">
    <div class="main-top">
		<div class="logo">
		<img src="images/whiteLogo.jpg" alt="logo">
        <H1>Dashboard</H1>
		
		<div class="users">
			<?php if(!empty($_SESSION["userid"])) { 
				echo $_SESSION["name"];?>
			<div class="out">
        		<ul class="nav navbar-nav navbar-right">
           			<li><a href="logout.php"> Logout </a></li>          
        		</ul>
        			<?php } ?>
			</div>
		</div>
	</div>	
</section>

<ul class="nav nav-tabs">
    <?php if($user->isAdmin()): ?>
        <li id="user"><a href="user.php"> Users </a></li>
    <?php endif; ?>
    <?php if($user->isAdmin() || $user->isTeacher()): ?>
        <li id="student"><a href="student.php">Students </a></li>
        <li id="attendance"><a href="attendance.php"> Attendance </a></li>
    <?php endif; ?>
    <li id="attendance_report"><a href="attendance_report.php"> Attendance Report </a></li>	
	<li id="messaging_system"><a href="messaging-system/index.php"> Messaging System</a></li>
</ul>