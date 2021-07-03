<html>
<script type = "text/javascript">
function check(){

if(document.cancel_car.cancel.value==false){
 alert ("Phone number is required!");
document.cancel_car.cancel.focus();
 return false;
}
 return( true );

}
</script>
<body><form  method="post" name="cancel_car" action ="CancelCar.php" onsubmit = "return(check());">
To cancel the reservation,<br>enter the phone number : <br>
<input type ="text" name ="cancel" ><br>
<input type ="submit" value="cancel the reservation">
</form>
</body>
	</html>