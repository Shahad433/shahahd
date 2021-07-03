<html lang="en">
<head>
<title>Hotel </title>
<link  rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" >
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" >
</script>
</head>
<body>
<!----navigationbar----->
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><img src="logo.png"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item active">
    <a class="nav-link" href="index.html">HOME</a>
</li>
<li class="nav-item">
<a class="nav-link" href="BookRoom.php">BOOK ROOM</a>
</li>
<li class="nav-item">
<a class="nav-link" href="bookcar.php">BOOK CAR</a>
</li>
<li class="nav-item">
<a class="nav-link" href="Facilities.php">Facilities</a>
</li>
<li class="nav-item">
<a class="nav-link" href="BookRestaurant.php">Restaurant</a>
</li>
<li class="nav-item">
<a class="nav-link" href="BookTourism.php">Tourism</a>
</li>
    
</ul>
</div>
</nav>
</section>
<br><br><br>
<?php
print '<script type="text/javascript">';
print 'alert("The reservation is done correctly..")';
print '</script>';
?>
<div class="a_div"><center>
<p>
<?php
$arrival=$_POST["arrival"];
$departure=$_POST["departure"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$room_no=$_POST["rooms"];
$adult=$_POST["adult"];
$children=$_POST["children"];
$room_type=$_POST["roomtype"];
$payment=$_POST["payment"];


$connection=mysql_connect("localhost","root","root1234");
mysql_select_db("hotel_system");
$select="insert into rooms (arrival,departure,full_name,phone,email,room_number,adult,children,room_type,payment) values ('".$arrival."','".$departure."' , '".$name."','".$phone."' ,'".$email."' ,'".$room_no."','".$adult."','".$children."', '".$room_type."' ,'".$payment."' )";
$sql=mysql_query($select);

if($connection){
    echo"Connect done successfully<br>";

}else{echo"Connection failed<br>";
}

$sql2="select * from rooms where phone='$_POST[phone]' ";
$query=mysql_query($sql2);
while ($row=mysql_fetch_array($query)){
  
   echo" Your arrival date : $row[arrival] <br>
   Your departure date : $row[departure]<br>
  Your name :$row[full_name] ,Phone number : $row[phone]<br>
  Email: $row[email]<br>
   Room Number : $row[room_number]<br>
   To  :$row[adult] adults, and $row[children] children<br>
 Room Type :$row[room_type]<br>
 Payment way :$row[payment]<br>
   "; 
}
?>
" Have a nice stay " !!<br>
To cancel the reservation of room ,click <a href="CancelRoomReservation.php">Here</a>;
<br>
</p>
</center>
</div><br><center><a href="index.html"><input type = "submit" name ="done" value ="Done!"></a></center><br><br>
</body>
</html>