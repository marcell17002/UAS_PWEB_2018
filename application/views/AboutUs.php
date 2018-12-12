<!DOCTYPE html>
<html lang="en">
<head>
	<title>About Us</title>
	<link rel = "stylesheet" type = "text/css" href="css/abu.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/abu.css') ?>"/>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
</script>
<body>
	<header>
	<div class="main" style="margin-left: 500px;">
       <a href="<?php echo base_url('index.php/Home/AboutUs');?>">About us</a>
       <a href="<?php echo base_url('index.php/Home/Event');?>">Event</a>
       <a href="<?php echo base_url('index.php/Home/WhatsOn');?>">WhatsOn</a>
       <a href="<?php echo base_url('index.php/Home');?>">Home</a>
    </div>
  </header>
<div class="row1">
	<div class="container">
		<div class="row">
			<br><br>
			<h1 style="font-color: #212c54"><center>About Us</center></h1>
		</div>
		<div class="row">
			<p >Media kita merupakan sebuah sarana bagi mahasiswa untuk berbagi tentang event yang ada di kampus mereka . Konten yang kami buat tidak hanya sebagai sarana untuk ajang promosi saja namun dalam konten ini kami juga menwarkan sebagai pihak kedua dalam penjualan berbagai tiket di event yang dimiliki oleh kampus di web media kita . Tidak hanya isu yang sedang hangat diperbincangkan di kampus-kampus tapi dalam konten web ini kami jugaa menyediakan informasi” aktual terhadap kampus tersebut . CRUD dalam konten web ini terjadi ketika user ingin mendaftar , pembelian tiket (update data) , ketika ingin sharing konten .  </p><br><br>
		</div>
	</div>
</div>
<div class="row2">
	<div class="container">
		<div class="row"><br><br>
			<div class="slideshow-container">

			<div class="mySlides fade">
			  <img src="<?php echo base_url('assets\image\a.jpeg');?>" style="width:1000px;height:400px;">
			  <div class="text">Caption Text</div>
			</div>

			<div class="mySlides fade">
			  <img src="<?php echo base_url('assets\image\b.jpeg');?>" style="width:1000px;height:400px;">
			  <div class="text">Caption Two</div>
			</div>

			<div class="mySlides fade">
			  <img src="<?php echo base_url('assets\image\e.jpeg');?>" style="width:1000px;height:400px;">
			  <div class="text">Caption Three</div>
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

			</div>
			<br>

			<div style="text-align:center">
			  <span class="dot" onclick="currentSlide(1)"></span> 
			  <span class="dot" onclick="currentSlide(2)"></span> 
			  <span class="dot" onclick="currentSlide(3)"></span> 
			</div>

			<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
			  showSlides(slideIndex += n);
			}

			function currentSlide(n) {
			  showSlides(slideIndex = n);
			}

			function showSlides(n) {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("dot");
			  if (n > slides.length) {slideIndex = 1}    
			  if (n < 1) {slideIndex = slides.length}
			  for (i = 0; i < slides.length; i++) {
			      slides[i].style.display = "none";  
			  }
			  for (i = 0; i < dots.length; i++) {
			      dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " active";
			}
			</script>
			<br><br>
		</div>
	</div>
</div>
<div class="row3">
	<div class="container">
		<div class="row"><br><br>
			<h1 style="font-color: #212c54"><center>Our Focus</center></h1>
		</div>
		<div class="row">
			<p>Dalam sebuaah pengembangan web pasti ada tujuan tertentu yang melatarbelakanginnya .   Adapun beberapa tujuannya yaitu sebagai sarana publikasi dan promosi event kampus , sebagai wadah untuk melihat informasi aktual tentang kampus , sebagi sarana publikasi topik boncang utama yang ada di beberapa kampus . </p>
			<br><br>
		</div>
	</div>
</div>

<div class="row4">
	<div class="container" style="border-width: 1">
		<div class="row"><br><br>
			<h1 style="font-color: #212c54"><center>Meet Our Team</center></h1><br>
		</div>
		<div class="row">
			<div class="col-md-5">
				<center><img src="<?php echo base_url('assets\image\user1.png');?>" style="border-radius: 50%;width: 150px;height: 150px"></center>
			</div>
			<div class="col-md-7">
				<p style="text-align: left ;margin-top: 70px;">Marcell Antonius 140810170034</p>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-7">
				<p style="text-align: right ;margin-top: 70px;">Sarah Hasna Azhara 140810170010 </p>
			</div>
			<div class="col-md-5">
				<img src="<?php echo base_url('assets\image\user1.png');?>"style="border-radius: 50%;width: 150px;height: 150px">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-5">
				<img src="<?php echo base_url('assets\image\user1.png');?>"style="border-radius: 50%;width: 150px;height: 150px">
			</div>
			<div class="col-md-7">
				<p style="text-align: left ;margin-top: 70px;">Alfin Bilqisthi 140810160052</p>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-7">
				<p style="text-align: right ;margin-top: 70px;">Iqbal Antoni 140810170054</p>
			</div>
			<div class="col-md-5">
				<img src="<?php echo base_url('assets\image\user1.png');?>"style="border-radius: 50%;width:150px;height:150px">
			</div>
		</div>
		<br><br>
	</div>
</div>
<div class="footeqr">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<br>
					 <p><a href="<?php echo base_url('index.php/Home');?>">Home</a></p>
		            <p><a href="<?php echo base_url('index.php/Home/WhatsOn');?>">WhatsOn</a></p>
		            <p><a href="<?php echo base_url('index.php/Home/Event');?>">Event</a></p>
		            <p><a href="<?php echo base_url('index.php/Home/login');?>">Log in</a></p>
		            <p><a href="<?php echo base_url('index.php/Home/signup');?>">Sign up</a></p>
		            <p><a href="<?php echo base_url('index.php/Home/AboutUs');?>">About us</a></p>
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
					<h6 style="color:#ffff;"><center> © 2018 MediaKita</center></h6>
				</div>
			</div>
		</div>
	</div>

			
</body>
</html>