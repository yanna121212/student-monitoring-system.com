<link rel="stylesheet" href="css/general.css">
<nav class="navbar navbar-default">
    <div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="">Student Monitoring System</a>
		</div>
		
		<ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-list"></span> Rooms</a></li>
			<li><a href="user.php"><span class="glyphicon glyphicon-user"></span> Users</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#account" data-toggle="modal"><?php echo $user; ?></a></li> <!--username-->

			<li class="dropdown"> <!--Drop down for going to dashboard and updating photo-->
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li><a href="#photo" data-toggle="modal"><span class="glyphicon glyphicon-picture"></span> Update</a></li>
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span> Go Back</a></li>
                    </ul>
			</li>
		</ul> 
    </div>
</nav>