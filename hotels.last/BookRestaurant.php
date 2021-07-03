<html>
<head>
<title>THE PAMPA GRILL</title>
<script type = "text/javascript">
function check(){

var check=document.PampaGrill.select.value;
	if( document.PampaGrill.date.value == false ) {
            alert( "Please enter the date" );
            document.PampaGrill.date.focus() ;
            return false;
}
 if( document.PampaGrill.time.value == false ) {
            alert( "Please enter the time" );
            document.PampaGrill.time.focus() ;
            return false;
}
if(document.PampaGrill.phone.value==false){
 alert ("Phone number is required!");
document.PampaGrill.phone.focus();
 return false;
}
if(check==-1){
alert("Enter number of people ! ");
document.PampaGrill.select.focus();
 return false;
}

if((document.PampaGrill.main[0].checked==false)&&(document.PampaGrill.main[1].checked==false)&&(document.PampaGrill.main[2].checked==false))
{
alert("Select main dish ");
document.PampaGrill.main[0].focus();
 return false;
}
if((document.PampaGrill.said[0].checked==false)&&(document.PampaGrill.said[1].checked==false)&&(document.PampaGrill.said[2].checked==false))
{
alert("Select said dish ");
document.PampaGrill.said[0].focus();
 return false;
}
if((document.PampaGrill.drink[0].checked==false)&&(document.PampaGrill.drink[1].checked==false)&&(document.PampaGrill.drink[2].checked==false))
{
alert("Select the drink ");
document.PampaGrill.drink[0].focus();
 return false;
}

return( true );
}

</script>
</head>
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

<center>
	<div bgcolor="red"><center><h1> <b><?php echo" THE PAMPA GRILL"; ?></b></h1></center></div><br><br><br><br>
	<form name ="PampaGrill" action="InsertRestaurant.php" method="post"  onsubmit = "return(check());">
	<h3 bgcolor="red"><b><i>Details</i></b></h3><br>
	<h4>work hours:</h4><br>
	<p><?php echo "Open all weekdays from 06:00 to 01:00 (dinner only) "; ?></p>
	<hr/>
	<h3 bgcolor="red"><b><i>Site</i></b></h3><br>
	<h4>site:</h4><br>
	<?php echo  "on the ninth";  ?>
	<h4 bgcolor="rsd">Dress up:</h4><br>
	<P><?php echo "In keeping with local customs and traditions,<br> all guests must wear local clothing or clothing appropriate to the place.<br> Do notwear short pants, sleeveless shirts, or sports shirts"  ;?></p><hr/> 
		<h3>select the day:</h3>
		<input type="date"  name="date" min="2019-4-11" max="2019-12-30"><br>
		<h3>select a time:</h3>
		 <input type="time" name="time"><br>
       <h3> Enter phone number :</h3>
        <input type="text" name="phone"><br>
<h3>number of people:</h3>
<select name="select">
	<option value="-1">--persons--</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
</select>

<h3>main dish:</h3>
<table border=2>
	<tr>
<th><input type="radio" name="main" value="Beef steak"/>Beef steak</th>
<th><input type="radio" name="main" value="Carbonada"/>Carbonada</th>
<th><input type="radio" name="main" value="Milanesas"/>Milanesas<br></th>
</tr></table>
<h3>side dish:</h3>
<table border=2>
	<tr>

<th><input type="radio" name="said" value="Rockell cake"/>Rockell cake</th>
<th><input type="radio" name="said" value="Alfajores"/>Alfajores</th>
<th><input type="radio" name="said" value="Dulcede leche"/>Dulcede leche</th>
</tr></table>
<h3>drinks:</h3>
<table border=2>
	<tr>
<th><input type="radio" name="drink" value="Grape juice"/>Grape juice</th>
<th><input type="radio" name="drink" value="Natural juice"/>Natural juice</th>
<th><input type="radio" name="drink" value="Carbonated water"/>Carbonated water</th>
</tr></table>

<h3>Write your comment if you have:</h3>
<textarea name="comment" cols="44" rows="4"></textarea><br><br><br>
<button type="submit" class="btn btn-primary" value="submit">Send</button>
</form></center>
    </body>
	</html>