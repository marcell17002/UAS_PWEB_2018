<!DOCTYPE html>
<html>
<head>
  <title>Event</title>
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
       <a href="<?php echo base_url('index.php/Home/AboutUsManage');?>">About us</a>
         <a href="<?php echo base_url('index.php/Home/pilih');?>">Upload</a>
         <a href="<?php echo base_url('index.php/Home/EventManage');?>">Event</a>
         <a href="<?php echo base_url('index.php/Home/WhatsOnManage');?>"">Whats On</a>        
       <a href="<?php echo base_url('index.php/Home/manajer');?>">Home</a>
    </div>
  </header>
  
<h1 style="text-align: center;font-family: arial; margin-top: 50px;"> Data of Event </h1>
  <table width='80%' border=1 style="text-align: center;">
    <tr style="font-family: arial;background-color: white;">
        <th>id_Event</th>
        <th>NPM</th>
        <th>Kategori</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Image</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>No_Rek</th>
        <th>Con</th>
    </tr>
    

    <?php foreach ($eventNPM as $data){?>  
    <tr>
      <td><?php echo $data->id_event;?></td>
        <td><?php echo $data->npm_Delegator;?></td>
        <td><?php echo $data->kategori_event;?></td>
        <td><?php echo $data->judul_event;?></td>
        <td><?php echo $data->Deskripsi_event;?></td>
        <td><?php echo $data->image_event;?></td>
        <td><?php echo $data->harga;?></td>
        <td><?php echo $data->stok;?></td>
        <td><?php echo $data->no_rek;?></td> 
         <td><a href="<?php echo site_url('Home/Event_edit/'.$data->id_event);?>">Edit</a> | <a href="<?php echo site_url('Event_cntr/deletedata/'.$data->id_event);?>">Delete</a></td> 
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
