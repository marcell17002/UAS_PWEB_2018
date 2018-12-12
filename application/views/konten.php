<!DOCTYPE html>
<html>
<head>
	<title>Whats On</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/styleWhatsOn.css') ?>"/>
</head>
<body>
	<header>
  <div class="main" style="margin-left: 500px;">
       <a href="<?php echo base_url('index.php/Home/AboutUs');?>">About us</a>
       <a href="<?php echo base_url('index.php/Home/Event');?>">Event</a>
       <a href="<?php echo base_url('index.php/Home/WhatsOn');?>">WhatsOn</a>
       <a href="<?php echo base_url('index.php/Home');?>">Home</a>
    </div>
  </header>
  <br><br>
  <div class="konten">
    <?php foreach($newsbyID as $data){ ?>
      <H1 style="text-align: center; margin-left: 100px;"><?php echo $data->judul ;?></H1>
      <br>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <img src="<?php echo base_url()?>assets/image/<?php echo $data->image ;?>" style="height: 300px; width: 500px;margin-left: 20px;">
            <h5 style="color: red;margin-left: 30px;">Kategori : <?php echo $data->kategori ;?></h5>
      
          </div>
          <div class="col-md-8">
            <h3 style="margin-left: 150px;"><?php echo $data->Deskripsi ;?></h3>
          </div>
        </div>
      </div>
     <?php } ?>

  </div>
<br>
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
