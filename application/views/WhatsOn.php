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
<style >
  .sidenav {
    width: 400px;
    position: absolute;
    z-index: 1;
    top: 190px;
    left: 900px;
    background: #eee;
    overflow-x: hidden;
    padding: 8px 0;
}

.sidenav a {
    padding: 3px 3px 3px 3px;
    text-decoration: none;
    font-size: 18px;
    color: white;
    display: block;
    font-family: arial;
}

.sidenav a:hover {
    color: #064579;
}

.konten {
    margin-right:500px; /* Same width as the sidebar + left position in px */
    font-size:14px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}
</style>
</head>
<body>
	<header>
  <div class="main" style="margin-left: 700px;">
       <a href="<?php echo base_url('index.php/Home/AboutUs');?>">About us</a>
       <a href="<?php echo base_url('index.php/Home/Event');?>">Event</a>
       <a href="<?php echo base_url('index.php/Home/WhatsOn');?>">WhatsOn</a>
       <a href="<?php echo base_url('index.php/Home');?>">Home</a>
    </div>
  </header>
  <div class="event-header">
    <span class="text-light">Intensive News</span>
     <?php echo $this->session->userdata('judul');?>
    <!-- <div class="search-container">
      <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit" class="search-box-button"><i class="material-icons">search</i></button>
      </form>
    </div> -->
  </div>
  <br><br>

  <div class="konten">
  <div class="container-fluid">
    <div class="row">
     <?php foreach ($response as $data){?>  
          <div class="col-md-4">
            <div class="sblock2">
            <img src="<?php echo base_url()?>assets/image/<?php echo $data['image'] ;?>" style="height: 200px; width: 100%;">
              <div class="textonimg">
              <p><a href="<?php echo base_url('index.php/Home/konten/').$data['id_news'];?>" class="textonimg2" style="font-color:white"><?php echo $data['judul'];?></a></p>
              </div>
            </div>
          </div>
      <?php } ?>
    </div>
  </div>
  </div>
  

      <div class="sidenav">
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-12" style="">

      <table>
      <tr>
        <th> News Uptodate </th>
      </tr>

     <?php foreach ($response as $data){?>
      <tr>
        <td><a href="<?php echo base_url('index.php/Home/konten/').$data['id_news'];?>"><?php echo $data['judul'];?></a></td>
      </tr>
     <?php } ?>
      </table>
      </div>
    </div>
    </div>
    </div>
<br><br>


<footer style="margin-top: 400px;">
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
