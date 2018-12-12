 	<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
 	<link rel="stylesheet" href="<?php echo base_url('assets/css/dashboard.css') ?>"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header>
		<div class = "navbar">
		<ul class ="ul1">
	        <li><a href="<?php echo base_url('index.php/Home/manajer');?>">Home</a></li>
	        <li><a href="<?php echo base_url('index.php/Home/WhatsOnManage');?>"">Whats On</a></li>
	        <li><a href="<?php echo base_url('index.php/Home/EventManage');?>">Event</a></li>
	        <li><a href="<?php echo base_url('index.php/Home/pilih');?>">Upload</a></li>
	        <li><a href="<?php echo base_url('index.php/Home/contain');?>">Contain</a></li>
	        <li><a href="<?php echo base_url('index.php/Home/AboutUsManage');?>">About us</a></li>
      	</ul>
      	</ul>
		</div>
	</header>

	<br><br>
	<h1 style="text-align: center;">Welcome , Insert Your Data Here </h1>
	<h4 style="text-align: center;">Hot news event</h4>
	<br>
	<br><br>
	<div class="konten">
		<form action="<?php echo site_url('WhatsOn_cntr/savedata');?>" method="post">
			<div class="Container"> 	
				<div class="row1">
					<div class="col-md-4">
						Judul
					</div>
					<div class="col-md-8">
						<input type="text" name="judul" value="Judul " style="width: 500px;">
					</div>
				</div>
				<br><br>
				<div class="row1">
					<div class="col-md-4">
						Kategori
					</div>
					<div class="col-md-8">
						<select name="kategori">
							<option value="Ekonomi">Ekonomi</option>
							<option value="Sport">Sport</option>
						    <option value="Sains and Social">Sains and Social</option>
							<option value="Entertaiment">Entertaiment</option>
							<option value="Edukasi">Edukasi</option>
							<option value="Promotion">Promotion</option>
						</select>
					</div>
				</div>
				<br><br>
				<div class="row1">
					<div class="col-md-4">
						Deksripsi 
					</div>
					<div class="col-md-8">
						<textarea name="desk" style="width:250px;height:100px;" value="deskripsi /isian"></textarea>
					</div>
				</div>	
				<br><br>
				<div class="row1">
					<div class="col-md-4">
						Upload Image
					</div>
					<div class="col-md-8">
						<input type="file" name="image" id="image_news" style="border:none; top: 50px;">
					</div>
				</div>
				<input type="submit" name="save" value="input" style="margin-left: 670px;">
			</div>
		</form>
	</div>
	<br><br>

	<footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6" >
          <br>
          <div class="foot">
            <p><a href="<?php echo base_url('index.php/Home');?>">Home</a></p>
            <p><a href="<?php echo base_url('index.php/Home/WhatsOn');?>">WhatsOn</a></p>
            <p><a href="<?php echo base_url('index.php/Home/Event');?>">Event</a></p>
            <p><a href="<?php echo base_url('index.php/Home/login');?>">Log in</a></p>
            <p><a href="<?php echo base_url('index.php/Home/signup');?>">Sign up</a></p>
            <p><a href="<?php echo base_url('index.php/Home/AboutUs');?>">About us</a></p>
          </div>
        </div>
        <div class="col-md-6">
          <br>
          <a href="#"><i class="fa fa-facebook-official" style="font-size:36px "></i></a>

          <a href="#"><i class="fa fa-google" style="font-size:36px"></i></a>

          <a href="#"><i class="fa fa-instagram" style="font-size:36px"></i></a>

          <a href="#"><i class="fa fa-linkedin" style="font-size:36px"></i></a>
          <br>
        </div>
        <div class="col-md-3">
          <br>
          <div class="kontak">
          <p >Email</p>
          <p>Hello.MediaKita@gmail.com</p>
          </div>
        </div>
        <div class="col-md-3">
          <br>
          <div class="kontak">
          <p>Working Hours</p>
          <p>Weekdays 09.00-22.00 wib</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h6 style="color:#ffff;"><center>©2018 MediaKita</center></h6>
        </div>
      </div>
    </div>
  </footer>
	
</body>
</html>