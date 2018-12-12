<!DOCTYPE html>
<html>
<head>
	<title>Buy Ticket</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel = "stylesheet" type = "text/css" href="<?php echo base_url('assets/css/stylebt.css');?>">
</head>
<body>
  <header>
	<div class="main" style="margin-left: 700px; font-family: arial;margin-right: 50px;font-size: 16px;">
    <a href="<?php echo base_url('index.php/Home/AboutUs');?>">About us</a>
    <a href="<?php echo base_url('index.php/Home/Event');?>">Event</a>
    <a href="<?php echo base_url('index.php/Home/WhatsOn');?>">WhatsOn</a>
    <a href="<?php echo base_url('index.php/Home');?>">Home</a>
  </div>
  </header>
  <div class="container" style="margin-top: 80px;">
    <div class="row">
    <div class="col-sm-8">
    <div class="input_data">
      <form action="<?php echo site_url('Event_cntr/save_tiket');?>" method="post">
        <?php foreach($response as $r){ ?>
          <input type="hidden" value="<?php echo $r->id_event; ?>" name="id_event">
        <?php } ?>
        <h2 class="text-header">Buy Ticket</h2>
        Nama Lengkap<br>
        <input type="text" name="nama_pembeli">
        <br>
        No Identitas (KTP/Passport)<br>
        <input type="text" name="no_identitas">
        <br>
        No Hp<br>
        <input type="text" name="telp">
        <br>
        Email<br>
        <input type="text" name="email_pembeli">
        Jumlah Tiket<br>
        <input type="text" name="jumlah_tiket">
        <input type="submit" value="CHECK OUT" class="submit-button" name="Submit">
       
      </form> 
    </div>
    </div>
    <div class="col-sm-4">
      <div class="input_data" style="background-color: #f9f9f9;">
        <form name="bt" action="" style="margin-top: 49px;" method="post">
        Harga <br>
        <input type="text" id="harga" value="" onfocus="startHitung()" onblur="akhirHitung()" method="get" >
        Jumlah Tiket
        <input type="text" id="tot_ticket" name="jumlah_tiket" onfocus="startHitung()" onblur="akhirHitung()">
        Total
        <input type="text" id="tot_price" readonly>
        <br><br>
        <input type="submit" value="CHECK OUT" class="submit-button" name="Submit">
        <script>
          function startHitung(){
            interval = setInterval("hitung()",1);
          }
          function hitung(){
            var harga = parseInt(document.getElementById("harga").value);
            var jumlahtiket = parseInt(document.getElementById("tot_ticket").value);
            Jumlah = harga*jumlahtiket;
            document.getElementById("tot_price").value=Jumlah;
          }
          function akhirHitung(){
            clearInterval(interval);
          }
      </script>
      </div>
    </div>
  </div>
  </div>  
  <br><br><BR>

  <footer style="background-color: #181818;">
    <div class="container-fluid">
      <div class="row" style="padding-top: 50px;">
        <div class="col-md-6" >
          <br>
          <div class="foot" style="font-size: 17px; padding-left: 100px;">
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