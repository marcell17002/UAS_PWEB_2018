<!DOCTYPE html>
<html>
<head>
	<title>Tiket</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel = "stylesheet" type = "text/css" href="<?php echo base_url('assets/css/styletiket.css'); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
  <header>
	<div class="main">
       <a href="tugas.html">Home</a>
       <a href="WhatsOn.html">WhatsOn</a>
       <a class="active" href="tiket.html">Event</a>
       <a href="abu.html">About us</a>
       <a href="#">Contact</a>
  	</div>
  </header>
  <div class="event-header">
    <span class="text-light">Upcoming Event</span>
    <div class="search-container">
      <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit" class="search-box-button"><i class="material-icons">search</i></button>
      </form>
    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-sm-9">
      <?php foreach ($response as $data) {?>
        <div class="col-sm-4" id="tiket">
          <div class="price">
            <div class="price-button">
            <p class="img"><?php echo $data['image_event'];?></p>
            <p><?php echo $data['Deskripsi_event'];?></p>
            <p>Harga : <?php echo $data['harga'];?></p>
            <p>Available Tiket : <?php echo $data['stok']?></p>
            <p><a href="CBuyTicket" class="button">BUY</a></p>
            </div>
          </div>
        </div>
      <?php } ?>      
  	</div>
    <div class="col-sm-3">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      <div id="calendar">
      	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="<?php echo base_url('assets/js/jquery-ui-datepicker.min.js'); ?>" ></script>
		<script>
    	$('#calendar').datepicker({
        	inline: true,
        	firstDay: 1,
        	showOtherMonths: true,
        	dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    	});
		</script>
      </div>
  </head>
  <body>
    <table>
      <script language="javascript" type="text/javascript">
        var i, j, row, raw = dateTime.getRawCalendar();
        for (i = 0; i <= raw.length; i += 7) {
          row = raw.slice(i, i + 7);
          document.write('<tr>');
          for (j = 0; j < row.length; j++) {
            row[j] == dateTime.getToday() ? document.write('<td id="today">' +
                row[j] + '</td>') : document.write('<td>' + row[j] + '</td>');
          }
          document.write('</tr>');
        }
      </script>
    </table>
    </div>
    
  </div>
  </div>

</body>
</html>
