<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
 	<link rel="stylesheet" href="<?php echo base_url('assets/css/styleSU.css') ?>"/>
</head>
<body>
	<header>
		<div class = "navbar">
		<ul class ="ul1">
        <li><a href="tugas.html">Home</a></li>
        <li><a href="WhatsOn.html">Whats On</a></li>
        <li><a href="tiket.html">Event</a></li>
        <li><a href="abu.html">About us</a></li>
      </ul>
		</div>
	</header>
	<div class="SignUp">
		<h2>Sign Up</h2>
		<form method="post" name="signup_form" action="<?php echo site_url('Signup_cntr/savedata');?>">
			<p>NPM</p>
			<input type="text" name="npm" placeholder="npm">
			<p>Nama</p>
			<input type="text" name="nama" placeholder="nama">
			<p>Email</p>
			<input type="text" name="email" placeholder="xxxxxxx@gmail.com">
			<p>No.telpon</p>
			<input type="text" name="no_telpon" placeholder="+62">
			<p>Nama Universitas</p>
			<input type="text" name="nama_univ" placeholder="Universitas Padjadjaran">
			<p>kode Universitas</p>
			<input type="text" name="kd_univ" placeholder="XXXXX">	 
			<p>Username</p>
			<input type="text" name="username" placeholder="Username">	 
			<p>Password</p>
			<input type="text" name="password" placeholder="Password">
			<input type="Submit" name="save" Value="Sign Up" style="color: black ; font-family: arial; font-size: 16px;">
		</form>
			<a href="<?php echo base_url('index.php/Home/login');?>"><input type="Submit" name="" value="Log In" style="color: black ; font-family: arial; font-size: 16px;"></a>
	</div>
</body>
</html>