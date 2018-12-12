<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
 	<link rel="stylesheet" href="<?php echo base_url('assets/css/styleLI.css') ?>"/>
</head>
<body>
	<header>
		<div class = "navbar">
	  <ul class ="ul1">
        <li><a href="<?php echo base_url('index.php/Home');?>">Home</a></li>
        <li><a href="<?php echo base_url('index.php/Home/WhatsOn');?>">Whats On</a></li>
        <li><a href="<?php echo base_url('index.php/Home/Event');?>">Event</a></li>
        <li><a href="<?php echo base_url('index.php/Home/AboutUs');?>">About us</a></li>
      </ul>
		</div>
	</header>
	<div class="SignUp">
		<h2>Log In</h2>
		<form method="post" name="login_form" action="<?php echo site_url('Home/cek_login');?>">
			<h5 style="color: white; text-align: center;"><?php
				$info = $this->session->flashdata('info');
				if(!empty($info)){
					echo $info;
				} 
			?></h5>	
			<p>Username</p>
			<input type="text" name="username" placeholder="Username">
			<p>Password</p>
			<input type="password" name="password" placeholder="Password">
			<input type="Submit" value="Log In" style="color: black ; font-family: arial; font-size: 16px;">
		</form>
		<a href="<?php echo base_url('index.php/Home/signup');?>"><input type="Submit" value="Sign Up" style="color: black ; font-family: arial; font-size: 16px;"></a>
	</div>
	
</body>
</html>