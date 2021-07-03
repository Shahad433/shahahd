
<html>
<head>  </head>
<body>
    
<?php
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$message=$_POST["message"];

$connection=mysql_connect("localhost","root","123456789");
mysql_select_db("hotel_system");
$select="insert into user_data(name,phone,email,message) values ('".$name."','".$phone."' , '".$email."','".$message."')";
$sql=mysql_query($select);

if($connection){
    echo"Connect done successfully <br>";

}
else{echo"Connection failed <br>";
}
$sql2="select * from user_data where phone='$_POST[phone]' ";
$query=mysql_query($sql2);
while ($row=mysql_fetch_array($query)){
   echo " The form of your data :<br>
   Your name is: $row[name] <br>
    Your phone number is :$row[phone] <br>
   Your email : $row[email] <br>
   Your message : $row[message]<br>"; 
}
?>
  </body> 
</html>
