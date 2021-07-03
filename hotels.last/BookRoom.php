<html lang="en">
<head>
<title>Even hotel website</title>
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
<script>
function check()
{
if( document.Rform.arrival.value == false) {
            alert( "Please write the arrival date !" );
            document.Rform.arrival.focus() ;
            return false;
         }
if( document.Rform.departure.value == false) {
             alert( "Please write the departure date !" );
            document.Rform.departure.focus() ;
            return false;
         }
if( document.Rform.name.value == false) {
            alert( "Please write your name!" );
            document.Rform.name.focus() ;
            return false;
         }
if(document.Rform.phone.value==false){
 alert ("Phone number is required!");
document.Rform.phone.focus();
 return false;
}

if( document.Rform.email.value ==false) {
            alert( "Please provide your E-mail !" );
            document.Rform.email.focus() ;
            return false;}

         
if(document.Rform.roomtype.value ==false) {
 alert( "Please enter the room type !" );
 document.Rform.roomtype.focus() ;
 return false;
}
if(document.Rform.payment.value ==false) {
 alert( "Please enter the payment way !" );
 document.Rform.payment.focus() ;
 return false;
}

 return true;

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
<form name="Rform" action="ReseiptRoom.php" method="POST" onsubmit = "return(check());">
<div>
<div class="r_div">
<h2><em>When you want to reservation ? </em></h2><br><br>
<form><em>
    Arrival Date :
    <input type="date" id="travel" name="arrival" min="2019-4-11" max="2019-12-30" >
<br><br>
    <label for="travel">Departure Date :</label>
    <input type="date" id="travel" name="departure" min="2019-4-11" max="2019-12-30" >
<br><br>
<em>Your Full Name : <input type ="text" name="name"  /><br><br>
Your Phone Number : <input type ="text" name="phone"  /><br><br>
Your Email : <input type ="text" name="email"  /><br><br>
 Rooms Number : 
 <select name ="rooms" required>
 <option value ="1">1</option>
 <option value ="2">2</option>
 <option value ="3">3</option>
 <option value ="4">4</option>
 <option value ="5">5</option>
 <option value ="6">6</option>
 <option value ="7">7</option>
 <option value ="8">8</option>
 <option value ="9">9</option>
 <option value ="10">10</option>
 </select><br><br>
 Adult : 
 <select name ="adult" required>
 <option value ="1">1</option>
 <option value ="2">2</option>
 <option value ="3">3</option>
 <option value ="4">4</option>
 <option value ="5">5</option>
 <option value ="6">6</option>
 <option value ="7">7</option>
 <option value ="8">8</option>
 <option value ="9">9</option>
 <option value ="10">10</option>
 </select><br><br>
 Children :
 <select name ="children" required >
 <option value ="0">0</option>
 <option value ="1">1</option>
 <option value ="2">2</option>
 <option value ="3">3</option>
 <option value ="4">4</option>
 <option value ="5">5</option>
 <option value ="6">6</option>
 <option value ="7">7</option>
 <option value ="8">8</option>
 <option value ="9">9</option>
 <option value ="10">10</option>
 </select><br><br>
    <h3>Room's Type :</h3>
</script>
<input type="radio"name="roomtype"value="Grand Deluxe ( 950 $ )" />Grand Deluxe ( 950 $ )<br>
<input type="radio"name="roomtype"value="Suite ( 250 $ )" />Suite ( 250 $ )<br>
<input type="radio"name="roomtype"value="Superior ( 250 $ )" />Superior ( 250 $ )<br>
<input type="radio"name="roomtype"value="Suite with sea view ( 500 $ )" />Suite with sea view ( 500 $)<br>
<input type="radio"name="roomtype"value="Suite with Garden view ( 400 $ )" />Suite with Garden view ( 400 $ )<br>
<input type="radio"name="roomtype"value="Junior Suite with sea view ( 300 $ )"  />Junior Suite with sea view ( 300 $ )<br>
<input type="radio"name="roomtype"value="Chalet with sea view ( 1,200 $ )" />Chalet with sea view (1,200 $)<br><br>
<h3>Payment Way :</h3>
    <input type="radio"name="payment"value="Cash" /><i class="far fa-money-bill-alt" ></i>
<br><br>
<center><h2>* We wish you a wonderful stay .. Thanks for choosing us *</h2></center>
    <center><button type="submit" class="btn btn-primary" value="submit">Send</button></center><br><br>
    </em></form></div>
    <br><br></div></form>

<!----------------- rooms info --------------------->
<div class="i_div"><center>
<h2><em>Rooms Information :</em></h2>
<table border="1" cellpadding="9">
<tr>
  <th>Room Type</th><th>Residents</th>
</tr>
<tr>
  <td>Grand Deluxe</td><td>4 adult<img src="https://img.icons8.com/color/32/000000/parent-guardian.png"><img src="https://img.icons8.com/color/32/000000/parent-guardian.png"> with a child<img src="https://img.icons8.com/color/32/000000/babys-room.png"></td>
</tr>
<tr>
  <td>Suite</td><td>2 adult<img src="https://img.icons8.com/color/32/000000/parent-guardian.png"></td>
</tr>
<tr>
  <td>Suite with Garden view</td><td>2 adult<img src="https://img.icons8.com/color/32/000000/parent-guardian.png"> with a child<img src="https://img.icons8.com/color/32/000000/babys-room.png"></td>
</tr>
<tr>
  <td>Suite with sea view</td><td>3 adult<img src="https://img.icons8.com/color/32/000000/parent-guardian.png"> with a child<img src="https://img.icons8.com/color/32/000000/babys-room.png"></td>
</tr>
<tr>
  <td>Superior</td><td> 2 adult<img src="https://img.icons8.com/color/32/000000/parent-guardian.png"> with a child<img src="https://img.icons8.com/color/32/000000/babys-room.png"></td>
</tr>
<tr>
  <td>Junior Suite with sea view</td><td>1 adult<img src="https://img.icons8.com/color/32/000000/gender-neutral-user.png"></td>
</tr>
<tr>
  <td>Chalet with sea view</td><td>18 adult<img src="https://img.icons8.com/color/32/000000/conference-foreground-selected.png"></td>
</tr>
</table></center><br>
<h6><center>Grand Deluxe : " Dual Bed and two Single Beds and Baby Bed , WiFi Connection , bathroom and Kitchen with a coffee machine ".<br>
<center><img src="https://img.icons8.com/color/32/000000/bedroom.png"><img src="https://img.icons8.com/color/32/000000/single-bed.png">
<img src="https://img.icons8.com/color/32/000000/crib.png"><img src="https://img.icons8.com/color/32/000000/wifi.png">
<img src="https://img.icons8.com/color/32/000000/toilet-bowl.png"><img src="https://img.icons8.com/color/32/000000/cooker.png">
<img src="https://img.icons8.com/color/32/000000/coffee-maker.png"></center><br>
Suite : " Dual Bed , WiFi Connection , bathroom and Kitchen with a Toaster ". <br>
<center><img src="https://img.icons8.com/color/32/000000/bedroom.png"><img src="https://img.icons8.com/color/32/000000/wifi.png">
<img src="https://img.icons8.com/color/32/000000/toilet-bowl.png"><img src="https://img.icons8.com/color/32/000000/cooker.png">
<img src="https://img.icons8.com/color/32/000000/toaster.png"></center><br>
Suite with Garden view:" Dual Bed and baby Bed , WiFi Connection , bathroom and Kitchen with a BBQ tools ". <br>
* Free ticket to Zoo *<br>
<center><img src="https://img.icons8.com/color/32/000000/bedroom.png"><img src="https://img.icons8.com/color/32/000000/wifi.png">
<img src="https://img.icons8.com/color/32/000000/toilet-bowl.png"><img src="https://img.icons8.com/color/32/000000/cooker.png">
<img src="https://img.icons8.com/color/32/000000/grill.png"><img src="https://img.icons8.com/color/32/000000/steak.png">
*<img src="https://img.icons8.com/color/32/000000/elephant.png"><img src="https://img.icons8.com/color/32/000000/party-baloons.png">*</center><br>
Suite with sea view:" Dual Bed and Single Bed and Baby Bed , WiFi Connection , bathroom and Kitchen with a Microwave ". <br>
* Free Sea Tour * <br>
<center><img src="https://img.icons8.com/color/32/000000/bedroom.png"><img src="https://img.icons8.com/color/32/000000/single-bed.png">
<img src="https://img.icons8.com/color/32/000000/crib.png"><img src="https://img.icons8.com/color/32/000000/wifi.png">
<img src="https://img.icons8.com/color/32/000000/toilet-bowl.png"><img src="https://img.icons8.com/color/32/000000/cooker.png">
<img src="https://img.icons8.com/color/32/000000/microwave.png">*<img src="https://img.icons8.com/color/32/000000/sailing-ship-large.png">*</center><br>
Superior:" Dual Bed and Baby Bed with a baby toys, WiFi Connection , bathroom and Kitchen ".<br>
<center><img src="https://img.icons8.com/color/32/000000/bedroom.png"><img src="https://img.icons8.com/color/32/000000/crib.png">
<img src="https://img.icons8.com/color/32/000000/plush.png"><img src="https://img.icons8.com/color/32/000000/wifi.png">
<img src="https://img.icons8.com/color/32/000000/toilet-bowl.png"><img src="https://img.icons8.com/color/32/000000/cooker.png"></center><br>
Junior Suite with sea view:"Single Bed , WiFi Connection , bathroom and Kitchen ". <br>
* Free Netflix movies and PlayStation4 * <br>
<center><img src="https://img.icons8.com/color/32/000000/single-bed.png"><img src="https://img.icons8.com/color/32/000000/wifi.png">
<img src="https://img.icons8.com/color/32/000000/toilet-bowl.png"><img src="https://img.icons8.com/color/32/000000/cooker.png">
*<img src="https://img.icons8.com/color/32/000000/netflix.png"><img src="https://img.icons8.com/color/32/000000/controller.png">*
</center><br>
Chalet with sea view :" Dual Beds and Single Beds , WiFi Connection , bathroom , Kitchen with a Dishwasher and Popcorn maker , smart TV with a Home Cinema ".<br>
* Free Netflix movies * <br>
<center><img src="https://img.icons8.com/color/32/000000/bedroom.png"><img src="https://img.icons8.com/color/32/000000/single-bed.png">
<img src="https://img.icons8.com/color/32/000000/wifi.png"><img src="https://img.icons8.com/color/32/000000/toilet-bowl.png">
<img src="https://img.icons8.com/color/32/000000/cooker.png"><img src="https://img.icons8.com/color/32/000000/dishwasher.png">
<img src="https://img.icons8.com/color/32/000000/popcorn-maker.png"><img src="https://img.icons8.com/color/32/000000/tv.png">
<img src="https://img.icons8.com/color/32/000000/documentary.png">
    *<img src="https://img.icons8.com/color/32/000000/netflix.png">*</center><br></center></h6>
</div>
</body>
</html>