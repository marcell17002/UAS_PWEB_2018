<!DOCTYPE html>
<html>
<head>
  <title>Whats On</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/styleWhatsOnManage.css') ?>"/>
</head>
<body>
  <header>
  <div class="main" style="margin-left: 500px;">

       <a href="logout" style="color: #d60a58;"><b>LogOut</b></a>
       <a href="AboutUsManage">About us</a>
         <a href="pilih">Upload</a>
         <a href="EventManage">Event</a>
         <a href="WhatsOnManager">Whats On</a>        
       <a href="manajer">Home</a>
    </div>
  </header>
  
<h1 style="text-align: center;font-family: arial; margin-top: 50px;"> Data of News </h1>
  <table width='80%' border=1 style="color: white; ">
    <tr style="font-family: arial; font-color: black;">
        <th>id_News</th>
        <th>NPM</th>
        <th>Kategori</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Image</th>
        <th>Con</th>
    </tr>
    <?php foreach ($newsNPM as $data){?>  
    <tr>
      <td><?php echo $data->id_news;?></td>
      <td><?php echo $data->kd_npm_Delegator;?></td>
      <td><?php echo $data->kategori;?></td>
      <td><?php echo $data->judul;?></td>
      <td><?php echo $data->Deskripsi;?></td>
      <td><?php echo $data->image;?></td>
      <td><a href="<?php echo site_url('Home/News_edit?id_news='.$data->id_news);?>">Edit</a> | <a href="<?php echo site_url('WhatsOn_cntr/deletedata/'.$data->id_news);?>">Delete</a></td> 
      
    </tr>   
    <?php } ?>
  </table>

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
