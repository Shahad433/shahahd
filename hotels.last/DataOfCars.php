
    <html lang="en">
<head>
<title>Hotel Facilities</title>
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

<?php
$phone=$_POST["phone"];
$transport=$_POST["transport"];
$date=$_POST["travel"];
$time=$_POST["time"];
$car=$_POST["car"];
$long=$_POST["long"];
$drive=$_POST["drive"];




$connection=mysql_connect("localhost","root","root1234");
mysql_select_db("hotel_system");
$select="insert into cars(phone,place_of_receipt,date,time,name_of_car,period,drive) values ('".$phone."','".$transport."' , '".$date."','".$time."' ,'".$car."' ,'".$long."','".$drive."'  )";
$sql=mysql_query($select);

if($connection){
    echo"Connect done successfully<br>";

}else{echo"Connection failed<br>";
}

$sql2="select * from cars where phone='$_POST[phone]' ";
$query=mysql_query($sql2);
while ($row=mysql_fetch_array($query)){
  echo"The form of booking car is <br>";
   echo" Your phone number is: $row[phone] <br>
   You will take the car at : $row[place_of_receipt]<br>
   On :$row[date] At $row[time]<br>
   The car you selected: $row[name_of_car]<br>
   For : $row[period]<br>
   Drive :$row[drive]<br>"; 
}
?>

To cancel the reservation of car ,click <a href="CancelCarReservation.php">Here</a>"; 
        </body>
</html>