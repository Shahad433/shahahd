<html>
    <head><tiltle>Cancel Tourism Reservation</tiltle>

<script type = "text/javascript">
function check(){

if(document.cancel_tourism.cancel.value==false){
 alert ("Phone number is required!");
document.cancel_tourism.cancel.focus();
 return false;
}
 return( true );

}
</script></head>
<body><form  method="post" name="cancel_tourism" action ="CancelTourism.php" onsubmit = "return(check());">
To cancel the reservation,<br>enter the phone number : <br>
<input type ="text" name ="cancel" ><br>
<input type ="submit" value="Cancel The Reservation">
</form>
</body>
	</html>