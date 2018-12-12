<!DOCTYPE html>
<html>
<head>
  <title>Media Kita</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/manajer.css') ?>"/>
</head>
<body>
  <header>
    <div class = "navbar">
      <ul class ="ul1">
            <li style="margin-right: 500px;"> <?php echo $this->session->userdata('npm');?></li>
            <li><a href="manajer">Home</a></li>
            <li><a href="WhatsOnManage">Whats On</a></li>
            <li><a href="EventManage">Event</a></li>
            <li><a href="pilih">Upload</a></li>
            <li><a href="AboutUsManage">About us</a></li>
            <li><a href="logout" style="color: #d60a58;"><b>Log Out</b></a></li>
        </ul>
    </div>
    <!--
    <div class="logo" style="text-align: left;">
      <img src="image/logo.png" style="width: 150px ; height: 150px;">
    </div>-->
    <div class="konten" style="margin-top: 150px;font-family: Century Ghotic;">
      <h1 style="font-size: 72px;"> Hello , <?php echo $this->session->nama ?></h1>
      <h1> Bring Informations and Let the Experience be Joyful</h1> 
    </div>
  </header>
    <div class="chosen" style="margin-top: 5%;">
      <h1 style="text-align: center;">Be Innovative and Creativ </h1>
      <div class="container-fluid">
        <div class="row1" style="margin-top: 20px;text-align: center;">
          <div class="col-md-4">
            <a href="dashboard.html"><img src="<?php echo base_url('assets\image\report.png');?>" style="width: 150px; height: 150px; "></a>
          </div>
          <div class="col-md-4">
            <img src="<?php echo base_url ('assets\image\money.png');?>" style="width: 150px; height: 150px;">
          </div>
          <div class="col-md-4">
            <a href="dashboarde.html"><img src="<?php echo base_url('assets\image\ticket.png');?>" style="width: 150px; height: 150px;"></a>
          </div>
        </div>
        <div class="row1">
          <div class="col-md-4">
            <h5 style="text-align: center;">This Fiture is to help you to share <br>a famous or instresting topic that <br>you or yours campus been.</h5>
          </div>
          <div class="col-md-4">
            <h5 style="text-align: center;">Easiest way to share a moment to others </h5>
          </div>
          <div class="col-md-4">            
            <h5 style="text-align: center;">This Fiture is to help you to share a famous or insteresting <br>event that you or yours campus been held.<br> The Event must be an official Campsus .</h5>
          </div>
          </div>
        </div>
      </div>
    </div>
<br><br>
  <div class ="konten1">
    <div class = "event-header1">
      <h1 style="text-align: center;">Discover your Experience</h1><br>
    </div>
    <div class="wrap2">
      <div class="column1">
        <div class="price1">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">
              <img src="<?php echo base_url ('assets\image\blazture.jpg');?>" width="130%">
              </div>
              <div class="col-md-8">
                <h1 style="color: #FF7F00; padding-top: 20px;">Events</h1>
                <h5>Find your great Experiences</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column1">
        <div class="price1">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">
              <img src="<?php echo base_url('assets\image\blazture.jpg');?>" width="130%">
              </div>
              <div class="col-md-8">
                <h1 style="color:   #FF7F00 ;padding-top: 20px;">Whats On</h1>
                <h5>Seek The Other Atmoshpehere Issues </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>


  <div class="event-header1">
  <h1 style="text-align: center;">Upcoming Event</h1>
  </div>
  <br>
  <div class="wrap1">
    <div class="column">
      <ul class="price">
        <li class="header"> Blazture </li>
        <li class="price-button">
            <img src="<?php echo base_url('assets\image\blazture.jpg');?>" width="100%">
            Presale 2 : Rp 40.000 </li> 
          <li style="padding: 5px;"> Available Ticket :</li>
          <li class="price-button" style="padding: 5px;"><a href="#" class="button"> Buy Now </a></li>
      </ul>
    </div>
    <div class="column">
      <ul class="price">
        <li class="header"> Mural Competition </li>
        <li class="price-button">
            <img src="<?php echo base_url('assets\image\mural.jpg');?>" width="100%"> Price : Rp 45.000,00   
          </li> 
          <li style="padding: 5px;"> Available Ticket : </li>
          <li class="price-button" style="padding: 5px;"><a href="#" class="button"> Buy Now </a></li>
      </ul>
    </div>
    <div class="column">
      <ul class="price">
        <li class="header"> Mural Competition </li>
        <li class="price-button">
            <img src="<?php echo base_url('assets\image\semnas.jpeg');?>" width="100%">
            Price : Rp 45.000,00   
          </li> 
          <li style="padding: 5px;"> Available Ticket : </li>
          <li class="price-button" style="padding: 5px;"><a href="#" class="button"> Buy Now </a></li>
      </ul>
    </div>
    <div class="column">
      <ul class="price">
        <li class="header"> Blazture </li>
        <li class="price-button">
            <img src="<?php echo base_url('assets\image\blazture.jpg');?>" width="100%">
            Presale 2 : Rp 40.000 </li> 
          <li style="padding: 5px;"> Available Ticket :</li>
          <li class="price-button" style="padding: 5px;"><a href="#" class="button"> Buy Now </a></li>
      </ul>
    </div>
  </div>

<div class="konten2">
  <h1 style="text-align: center;">Book Your Ticket</h1><br>
  <br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <img src="<?php echo base_url('assets\image\konten1.png');?>" style="width: 100px;height: 100px;">
        <br>
        <h5>Choose Your Event</h5>
      </div>
      <div class="col-md-4">
        <img src="<?php echo base_url('assets\image\konten2.png');?>" style="width: 100px;height: 100px;">
        <br>
        <h5>Fill The Administration</h5>
      </div>
      <div class="col-md-4">
        <img src="<?php echo base_url('assets\image\konten3.png');?>"style="width: 100px;height: 100px;">
        <br>
        <h5>Simply Transaction</h5>
      </div>
    </div>
  </div>
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