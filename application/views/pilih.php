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
		<ul class ="ul1" style="margin-right: 10px;margin-top: 30px; word-spacing: 33px;">
	         <li><a href="<?php echo base_url('index.php/Home/manajer');?>">Home</a></li>
	        <li><a href="<?php echo base_url('index.php/Home/WhatsOnManage');?>"">WhatsOn</a></li>
	        <li><a href="<?php echo base_url('index.php/Home/EventManage');?>">Event</a></li>
	        <li><a href="<?php echo base_url('index.php/Home/pilih');?>">Upload</a></li>
	        <li><a href="<?php echo base_url('index.php/Home/AboutUsManage');?>">AboutUs</a></li>
            <li><a href="logout" style="color: #d60a58;"><b>LogOut</b></a></li>
      	</ul>
		</div>
	</header>

	<br><br>
	<h1 style="text-align: center;">Welcome , Inpiring Start in Us  </h1>
	<h4 style="text-align: center;">Choose Your Hilarious Event or News</h4>
	<br>
	<br><br>
	<div class="konten" style="margin-left: 300px;margin-right: 300px;">
		<div class="Container" >
			<div class="row">
				<div class="col-md-3">
					<a href="dashboard"><img src="<?php echo base_url('assets\image\image1.jpeg');?>" style="width: 200px; height: 200px; border-radius: 100px;"></a>
				</div>
				<div class="col-md-3">
					 <a href="<?php echo base_url('index.php/Home/dashboard');?>"><h3 style="text-align: center; color: orange;"> Made an Inspiring News </h3></a>
				</div>
				<div class="col-md-3">
					<a href="<?php echo base_url('index.php/Home/dashboarde');?>"><h3 style="text-align: center; color: orange;"> Make Your Event Colorful  </h3></a>
				</div>
				<div class="col-md-3">

					<a href="<?php echo base_url('index.php/Home/dashboarde');?>"	><img src="<?php echo base_url('assets\image\blazture.jpg');?>" style="width: 200px; height: 200px; border-radius: 100px;"></a>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>