<html>
<head>
   
        <title>Transportation</title>
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
        <script type = "text/javascript">
function check(){
if((document.car_form.transport[0].checked==false)&&(document.car_form.transport[1].checked==false))
{
alert("Select where to receive your car");
document.car_form.transport[0].focus();
 return false;
}
if( document.car_form.travel.value == false ) {
            alert( "Please enter the Date" );
            document.car_form.travel.focus() ;
            return false;
}
 if( document.car_form.time.value == false ) {
            alert( "Please enter the time" );
            document.car_form.time.focus() ;
            return false;
}

 if((document.car_form.car[0].checked==false)&&(document.car_form.car[1].checked==false)&&(document.car_form.car[2].checked==false)&&(document.car_form.car[3].checked==false)&&(document.car_form.car[4].checked==false)&&(document.car_form.car[5].checked==false))
{
alert("please select the car");
document.car_form.car[0].focus();
 return false;
}
 if ((document.car_form.long[0].checked==false)&&(document.car_form.long[1].checked==false)&&(document.car_form.long[2].checked==false)&&(document.car_form.long[3].checked==false)&&(document.car_form.long[4].checked==false)&&(document.car_form.long[5].checked==false)&&(document.car_form.long[6].checked==false))
	{
alert("How much would you like to use the car ");
document.car_form.car[0].focus();
 return false;
}
if((document.car_form.drive[0].checked==false)&&(document.car_form.drive[1].checked==false)){
alert("How would you like to drive? ");
document.car_form.car[0].focus();
 return false;
}
if(document.car_form.phone.value==false){
 alert ("Phone number is required!");
document.car_form.phone.focus();
 return false;
}
 return( true );

}
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
	<div class="r_div">
	<h2>Transportation </h2>
	<form action="DataOfCars.php" method="post" name = "car_form" onsubmit = "return(check());"><p>
	How do you want to take the car ?<br>
	<input type="radio" name="transport" value="At airport">At the airport<br>
	<input type="radio" name="transport" value="At hotel">At the hotel<br></p>
	
<p>Select the time and date to receipt of the car
<input type="date" id="travel" name="travel" min="2019-4-11" max="2019-12-30"><br>
  Select a time: <input type="time" name="time"><br><br><br>
  <center><table border="1">
 <tr rowspan="3"><p>For large cars with 9 persons capacity </p></tr>
 <tr>
        <td><img src="land3.jpg" width="150" height="150"></td><td><img src="patrol.jpg" width="150" height="150"></td><td><img src="gmc.jpg" width="150" height="150"></td>
 </tr>
 <tr>
 <td>Toyota Land Cruiser-2018 (20$/day)</td><td>Nissan Patrol-2018 (23$/day)</td><td>GMC Suburban-2018 (20$/day)</td>
 </tr>
 <tr>
 <td align="center"><input type="radio" id="cruiser" name="car" value="Toyota Land Cruiser-2018 (20$/day)"></td><td align="center"><input type="radio" id="patrol" name="car" value="Nissan Patrol-2018 (23$/day)"></td><td align="center">
 <input type="radio" id="suburban" name="car" value="GMC Suburban-2018 (20$/day)"></td>
 </tr>
 </table></center>
 <br>
  <center><table border="1">
      <tr rowspan="3"><p>For small cars with 4 persons capacity</p></tr>
 <tr>
 <td><img src="avalon.jpg" width="150" height="150"></td><td><img src="sonata.jpg" width="150" height="150"></td><td><img src="honda.jpg" width="150" height="150"></td>
 </tr>
 <tr>
 <td>Toyota Avalon-2018 (12$/day)</td><td>Hyundai Sonata-2018 (15$/day)</td><td>Honda Accord-2018 (10$/day)</td>
 </tr>
 <tr>
 <td align="center"><input type="radio" id="avalon" name="car" value="Toyota Avalon-2018 (12$/day)"></td><td align="center"><input type="radio" id="sonata" name="car" value="Hyundai Sonata-2018 (15$/day)"></td><td align="center">
 <input type="radio" id="accord" name="car" value="Honda Accord-2018 (10$/day)"></td>
 </tr>
 </table></center><p>
 How long you use the car?<br>
 <input type="radio" name="long" value="one day">for 1 day<br>
 <input type="radio" name="long" value="two days">for 2 days<br>
 <input type="radio" name="long" value="three days">for 3 days<br>
 <input type="radio" name="long" value="four days">for 4 days<br>
 <input type="radio" name="long" value="five days">for 5 days<br> 
 <input type="radio" name="long" value="six_days">for 6 days<br>
 <input type="radio" name="long" value="seven days">for 7 days<br>
<br><br>
How to drive? <br>
<input type="radio" name ="drive" value="with driver"/>
With a driver<br>
<input type="radio" name ="drive" value="without driver"/>
by myself<br><br>
Enter phone number :<input type="text" name="phone">
<br><br>* Note:The return car must be at the hotel.<br><br></p><button type="submit" class="btn btn-primary" value="submit">Send</button>
    <button type="Reset" class="btn btn-primary" value="Reset">Reset</button><br><br>
	</form></div>
	</body>
	</html>